<?php
/**
 * Created by IntelliJ IDEA.
 * User: PETEREMAN.ABASTILLAS
 * Date: 10/16/15
 * Time: 9:40 AM
 */

class Team extends MY_Controller  {
    public function id($id) {
        // get team by id;
        $data['player'] = $this->MY_Team->get_team_details($id);

        $this->render('teams/my_team', $data);
    }
} 