<?php

class BeforePayment extends MY_Controller{

	function index(){
		$this->load->helper('url');
		if($this->input->post('payment_method')=="instamojo"){
			
		$customer_name = $this->input->post('billing_first_name');
		$customer_email = $this->input->post('billing_email');
		$customer_phone = $this->input->post('billing_phone');

            
            $_SESSION['buyer']=$customer_name;
            $_SESSION['buyer_email']=$customer_email;
            $_SESSION['buyer_phone']=$customer_phone;
            redirect('payment/doPayment');
			}
			else{
		redirect('Checkout');

	}
	}
}

