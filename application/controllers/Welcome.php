<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    function __construct() {
        parent::__construct(true);
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        $data['teams'] = $this->MY_Team->get_teams();
        $data['results'] = $this->MY_Team->queryGameResults();
        $data['team_leader'] = $this->MY_Team->get_standing_of_teams();
        $data['player_leader'] = $this->MY_Team->get_standing_of_players();

        $data['timeline'] = $this->landing_page_timeline($data);
        $data['feeds'] = $this->landing_page($data);
        $data['standing'] = $this->standing_board($data);
        $data['leader'] = $this->leader_board($data);
        $data['players'] = $this->player_board($data);

        $this->render('landing/main', $data);
    }

    private function landing_page($data) {
        // latest
        if($this->ion_auth->logged_in()) {
            // include admin
            return $this->load->view("landing/start_game", $data, true);
        }
    }
    private function landing_page_timeline($data) {
        // latest
        return $this->load->view("landing/feeds", $data, true);
    }
    private function standing_board($data) {
        return $this->load->view("welcome_message", $data, true);
    }
    private function leader_board($data) {
        return $this->load->view("landing/leader_board", $data, true);
    }
    private function player_board($data) {
        return $this->load->view("landing/player_board", $data, true);
    }
}
