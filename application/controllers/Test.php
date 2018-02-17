<?php

class Test extends CI_Controller{
	function index(){
		$this->load->helper('url');
		$this->load->view('info.php');
	}
}