<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_controller {
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
        $this->render('welcome_message', $data);
    }

}
