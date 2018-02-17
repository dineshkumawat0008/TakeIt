<?php

class SearchProduct extends MY_Controller{
	function index(){
		$ip = $this->input->ip_address();
		$data=array();
		$this->load->model('getCartModel');
		$data['cart']= $this->getCartModel->getDetails($ip);
		//$data['cartitems']=$this->getCartModel->getCartItems($ip);
		$this->load->helper('url');
		$this->load->helper('form');
		$keyword=$this->input->post('keyword');
		$this->load->model('searchProductModel');
		$data['search']=$this->searchProductModel->searchProduct($keyword);
		$this->load->view('cart.php',$data);
	}
}