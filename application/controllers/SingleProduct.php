<?php


class SingleProduct extends MY_Controller{
	function index(){
		$this->load->model('singleProductModel');
		$data = array();
		$ip = $this->input->ip_address();

		$this->load->model('getCartModel');
		$data['cart']= $this->getCartModel->getDetails($ip);

		if($this->input->get('quantity')){
           $result= $this->add_to_cart_single($this->input->get('quantity'));
           $data['brand'] = $this->singleProductModel->getBrand($_SESSION['product']);
           $data['result']=$this->singleProductModel->getProductAgain($_SESSION['product']);
           $data['cart']= $this->getCartModel->getDetails($ip);
		        
                 }

		if($this->input->get('latestid')){
		 $unique_id = $this->input->get('latestid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProductLatest($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		else if($this->input->get('topsellingsid')){
		 $unique_id = $this->input->get('topsellingsid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProductTopSellings($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		else if($this->input->get('recentlyviewedid')){
		 $unique_id = $this->input->get('recentlyviewedid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProductRecentlyViewed($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		else if($this->input->get('topnewid')){
		 $unique_id = $this->input->get('topnewid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProductTopNew($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		else if($this->input->get('productid')){
		 $unique_id = $this->input->get('productid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProduct($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		else if($this->input->get('reletedproductid')){
		 $unique_id = $this->input->get('reletedproductid');
		 $data['brand'] = $this->singleProductModel->getBrand($unique_id);
		 $data['result']=$this->singleProductModel->getProductReleted($unique_id);
		 $_SESSION['product']=$unique_id;
		}
		$data['result1']=$this->singleProductModel->getProductReletedDefault();
		$this->load->helper('url');
		$this->load->view('single_product.php',$data);
		
	}

	 function add_to_cart_single($quantity){
                //$data=array();
                //$unique_id = $this->input->get('addtocartfromindex');
	 			$qty=$quantity;
	 	         $unique_id=$_SESSION['temp_single_pro_id'];
                $ip = $this->input->ip_address();
                $this->load->model('addToCartModel');
                $result=$this->addToCartModel->addToCart($unique_id,$ip,$qty);
                return $result;
                //$this->load->helper('url');
                //$this->load->view('home.php',$data);
        }
}