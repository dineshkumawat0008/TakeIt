<?php

class Checkout extends MY_Controller{
	function index(){
		$data = array();
		 $ip = $this->input->ip_address();
		 $this->load->model('getCartModel');
        $data['cart']= $this->getCartModel->getDetails($ip);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('checkout.php',$data);
		
	}
}