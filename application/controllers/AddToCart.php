<?php

class AddToCart extends MY_Controller{

		function add_to_cart_index(){
		$data=array();
		$unique_id = $this->input->get('addtocartfromindex');
		$ip = $this->input->ip_address();
		$this->load->model('addToCartModel');
		$result=$this->addToCartModel->addToCart($unique_id,$ip);
		$this->load->helper('url');
		redirect('Welcome','refresh');
		}

		
}


