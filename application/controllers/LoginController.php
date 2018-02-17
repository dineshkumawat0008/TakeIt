<?php

class LoginController extends MY_Controller{

	function login_manager(){
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->view('login_view.php');
		
	}
}


