<?php

/**
 * Created by IntelliJ IDEA.
 * User: houseofbree
 * Date: 10/12/2015
 * Time: 6:09 PM
 */
class MY_Team extends CI_Model
{
    private $table = "team";
    private $team_win_lose = 'SELECT *, case when results.my_score < results.opponent_score then 1 else 0 end as losses, case when my_score > opponent_score then 1 else 0 end as wins FROM ( SELECT g1.id, g1.match_id, g1.team_id AS my_team_id, g2.team_id AS opponent_id, g1.score AS my_score, g2.score AS opponent_score, m.date FROM `games` as g1 LEFT JOIN `games` as g2 ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id LEFT JOIN `matches` as m ON g2.match_id = m.id AND g1.match_id = m.id ) as results';

    function get_teams() {
        return $this->db->get($this->table)->result_array();
    }

    function queryGameResults() {
        $data = $this->db->query(
            'SELECT g1.id, g1.match_id, g1.team_id AS my_team_id, g2.team_id AS opponent_id, g1.score AS my_score, g2.score AS opponent_score, m.date FROM `games` as g1 LEFT JOIN `games` as g2 ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id LEFT JOIN matches as m ON m.id = g1.match_id ORDER BY m.date DESC'
        );
        $games =$data->result_array();
        foreach($data->result_array() as $d) {
        }
        return $data->result_array();
    }

    function hasPlayed($id1, $id2) {
        $string = $this->db->query(sprintf(
            "SELECT * FROM ( SELECT g1.id, g1.match_id, g1.team_id AS my_team_id, g2.team_id AS opponent_id, g1.score AS my_score, g2.score AS opponent_score FROM `games` as g1 LEFT JOIN `games` as g2 ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id ) as results WHERE results.opponent_id = %d AND my_team_id = %d",
            $id1, $id2
        ));
        return (object) array(
            "count"=> $string->num_rows(),
            "result"=>  $string->result_array()
        );
    }

    function get_standing_of_teams() {
        $query = 'SELECT results.id, results.my_team_id, t.name, SUM(CASE WHEN (results.my_score > results.opponent_score) THEN 1 ELSE 0 END) AS win, SUM(CASE WHEN (results.my_score < results.opponent_score) THEN 1 ELSE 0 END) AS loss FROM ( SELECT g1.id, g1.match_id, g1.team_id AS my_team_id, g2.team_id AS opponent_id, g1.score AS my_score, g2.score AS opponent_score FROM `games` AS g1 LEFT JOIN `games` AS g2 ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id ) AS results LEFT JOIN `team` as t ON t.id = results.my_team_id GROUP BY results.my_team_id ORDER BY win DESC LIMIT 8';
        return $this->db->query($query)->result_array();
    }

    function get_standing_of_players() {
        $query = 'SELECT player_id, u.first_name, SUM(`value`) AS total, AVG(`value`) AS ave FROM `games_scoresheet` AS gs LEFT JOIN users AS u ON u.id = gs.player_id WHERE `key` = \'score\' GROUP BY `player_id` ORDER BY total DESC LIMIT 5';
        return $this->db->query($query)->result_array();
    }

    function get_teams_by_id($id) {
        $string = sprintf(
            "SELECT u.id as id, u.first_name as first_name, tp.team_id as on_team, t.name, t.logo FROM team_players as tp LEFT JOIN users as u ON tp.user_id = u.id LEFT JOIN team as t ON tp.team_id = t.id WHERE tp.team_id = %d",
            $id
        );
        return $this->db->query($string)->result_array();
    }

    function insertMatch($s) {
        $created_date = date("Y-m-d H:i:s");
        $query = $this->db->insert("matches", array(
            'date' => date("Y-m-d H:i:s"),
            'season' => $s
        ));
        return $this->db->insert_id();
    }
    function insertGame($match_id, $s) {
        $data = array();
        foreach($s as $x) {
            $data[] = array(
                "match_id" => $match_id,
                "team_id" => $x['id'],
                "score" => $x['score'],
            );

        }
        $query = $this->db->insert_batch("games",$data);
    }
    function insertPlayerRecord($match_id, $s) {
        $data = array();
        foreach($s as $x) {
            $data[] = array(
                "match_id" => $match_id,
                "player_id" => $x['id'],
                "key" => 'score',
                "value" => $x['score']
            );

        }
        $query = $this->db->insert_batch("games_scoresheet",$data);
        // var_dump($query);
    }

    function get_team_details($id) {
    // SELECT * FROM ( SELECT player_id, u.first_name, SUM(`value`) AS total, MAX(`value`) AS career, AVG(`value`) AS ave, t.team_id AS my_team_id FROM `games_scoresheet` AS gs LEFT JOIN users AS u ON u.id = gs.player_id LEFT JOIN team_players AS t ON u.id = t.user_id WHERE `key` = 'score' GROUP BY `player_id` ORDER BY total DESC LIMIT 5) AS tt WHERE TT.my_team_id = %d
        $string = sprintf(
            "SELECT * FROM ( SELECT player_id, u.first_name, SUM(`value`) AS total, MAX(`value`) AS career, AVG(`value`) AS ave, count(`player_id`) as tgame, t.team_id AS my_team_id FROM `games_scoresheet` AS gs LEFT JOIN users AS u ON u.id = gs.player_id LEFT JOIN team_players AS t ON u.id = t.user_id WHERE `key` = 'score' GROUP BY `player_id` ORDER BY total DESC LIMIT 5) AS tt WHERE TT.my_team_id =  %d",
            $id
        );
        return $this->db->query($string)->result_array();
    }

}