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
        $data["teams"] = array(
            $this->MY_Team->get_teams_by_id($team1),
            $this->MY_Team->get_teams_by_id($team2)
        );

        $this->render("matches/match_up", $data);
    }

    public function end_of_match($team1, $team2) {

    }
}