<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
        $ip = $this->input->ip_address();  
              
	$data   = array();
        $this->load->model('getLatest');
        $this->load->model('getTopSellings');
        $this->load->model('getRecentlyViewed');
        $this->load->model('getTopNew');
        $this->load->model('getCartModel');
        $this->load->helper('url');
        $data['result'] = $this->getLatest->getProducts();
        $data['result1'] = $this->getTopSellings->getProducts();
        $data['result2'] = $this->getRecentlyViewed->getProducts();
        $data['result3'] = $this->getTopNew->getProducts();
        $data['cart']= $this->getCartModel->getDetails($ip);
		if($this->input->get('addtocartfromindex')){
           $result= $this->add_to_cart_index($this->input->get('addtocartfromindex'));
		        $data['cart']= $this->getCartModel->getDetails($ip);
                 }
                 $this->load->helper('url');
        $this->load->view('home.php',$data,'refresh');
	}

        function add_to_cart_index($unique_id){
                //$data=array();
                //$unique_id = $this->input->get('addtocartfromindex');
                $qty=1;
                $ip = $this->input->ip_address();
                $this->load->model('addToCartModel');
                $result=$this->addToCartModel->addToCart($unique_id,$ip,$qty);
                return $result;
                //$this->load->helper('url');
                //$this->load->view('home.php',$data);
        }
}
