<?php

class LogoutController extends MY_Controller{
	function index(){
		session_destroy();
		$this->load->helper('url');
		redirect('Welcome');
	}
}