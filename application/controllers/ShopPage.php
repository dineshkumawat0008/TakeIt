<?php


class ShopPage extends MY_Controller{
	function index(){
		$ip = $this->input->ip_address(); 
		if(!$this->input->get('brandname')){
		$data=array();
		$this->load->model('shopPageModel');
		$this->load->model('getCartModel');
		$data['result'] = $this->shopPageModel->getProducts();
		$data['cart']= $this->getCartModel->getDetails($ip);
		$this->load->helper('url');
		if($this->input->get('addtocartfromshop')){
           $result= $this->add_to_cart_shop($this->input->get('addtocartfromshop'));
		        $data['cart']= $this->getCartModel->getDetails($ip);
                 }
		$this->load->view('shop.php',$data);
	}

	}

	function getBrandProduct(){
		$data=array();
		$ip = $this->input->ip_address(); 
		$brandname = $this->input->get('brandname');
		$this->load->model('shopPageModel');
		$this->load->model('getCartModel');
		$data['result'] = $this->shopPageModel->getBrandProducts($brandname);
		$data['cart']= $this->getCartModel->getDetails($ip);
		$this->load->helper('url');
		// if($this->input->get('addtocartfromshop')){
  //          $result= $this->add_to_cart_shop($this->input->get('addtocartfromshop'));
		//         $data['cart']= $this->getCartModel->getDetails($ip);
  //                }
		$this->load->view('shop.php',$data);
	}

	   function add_to_cart_shop($unique_id){
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