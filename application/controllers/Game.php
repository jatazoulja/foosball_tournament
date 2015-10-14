<?php
/**
 * Created by IntelliJ IDEA.
 * User: PETEREMAN.ABASTILLAS
 * Date: 10/13/15
 * Time: 8:52 AM
 */

class Game extends MY_Controller {
    public function match_up($team1, $team2) {
        if($team1 == $team2) throw new Exception("can't match the same team...");
        $hasGame = $this->MY_Team->hasPlayed($team1, $team2);
        if($hasGame->count != 0) {
            // show game result;
            $this->game_results($team1, $team2, $hasGame->result);
        } else {
            $data["teams"] = array(
                $this->MY_Team->get_teams_by_id($team1),
                $this->MY_Team->get_teams_by_id($team2)
            );

            $this->render("matches/match_up", $data);
        }
    }
    private function game_results($team1, $team2, $obj) {
        $data = array(
            "team"
        );
        var_dump( $obj[0]['match_id'] );
        $this->render("matches/results", $data);

    }
    public function end_of_match() {
        $post = $_POST;
        $hasGame = $this->MY_Team->hasPlayed($post['team'][0]['id'], $post['team'][1]['id']);
        if($hasGame->count != 0) {
            echo json_encode(array(
                "code" => 420,
                "message" => "Addict! tapost na to!"
            )); // $this->game_results($team1, $team2, $hasGame->result);
        }
        // save match and get ID.
        $match_record = $this->MY_Team->insertMatch(0);
        $this->MY_Team->insertGame($match_record, $post['team']);
        $this->MY_Team->insertPlayerRecord($match_record, $post['players']);

        echo json_encode(array(
           "match_id" => $match_record
        ));
    }
}