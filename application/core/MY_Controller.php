<?php
/**
 * Created by IntelliJ IDEA.
 * User: PETEREMAN.ABASTILLAS
 * Date: 10/12/15
 * Time: 7:51 AM
 */

class My_controller extends CI_Controller {
    function __construct($true = false) {
        parent::__construct();

        if($true) return;

        if (!$this->ion_auth->logged_in())
        {
            if($this->uri->segment(2) != "login") redirect('auth/login');
        }
    }

    public function render($view, $data = array()) {
        $this->load->view('header');
        $this->load->view($view, $data);
        $this->load->view('footer');
    }
}