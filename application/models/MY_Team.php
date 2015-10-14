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

    function get_teams() {
        return $this->db->get($this->table)->result_array();
    }

    function queryGameResults() {
        $data = $this->db->query(
            'SELECT g1.id, g1.match_id, g1.team_id AS my_team_id, g2.team_id AS opponent_id, g1.score AS my_score, g2.score AS opponent_score FROM `games` as g1 LEFT JOIN `games` as g2 ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id'
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
    }

}