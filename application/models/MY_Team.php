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
    function get_teams_by_id($id) {
        $string = sprintf(
            "SELECT u.id as id, u.first_name as first_name, tp.team_id as on_team, t.name, t.logo FROM team_players as tp LEFT JOIN users as u ON tp.user_id = u.id LEFT JOIN team as t ON tp.team_id = t.id WHERE tp.team_id = %d",
            $id
        );
        return $this->db->query($string)->result_array();
    }

}