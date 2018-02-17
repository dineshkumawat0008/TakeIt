<?php

class Payment extends MY_Controller{

	function doPayment(){
		$this->load->helper('url');

            $ip = $this->input->ip_address();
            
				$data = array(
		    'name' => $_SESSION['buyer'],
		    'email' => $_SESSION['buyer_email'],
		    'phone' => $_SESSION['buyer_phone'],
		    'subtotal'=>$_SESSION['subtotal'],
		    
		);
				$this->load->model('deleteCartItems');
		$result=$this->deleteCartItems->deleteCart($ip);
				if(!isset($_SESSION['email'])){
					$_SESSION['returncheckout']=1;
					redirect('loginController/login_manager');

				}
				else{

          $this->load->view('instapay.php', $data);
      }
		//echo $customer_name;
	

	
}
}