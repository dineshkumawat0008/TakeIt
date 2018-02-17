<?php

class RegistrationController extends MY_Controller{

	function registration_manager(){
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->view('registration_view.php');
		
	}
}