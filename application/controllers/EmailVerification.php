<?php
class EmailVerification extends MY_Controller{

	function emailVerify(){
		$this->load->model('setActive');
		  $customer_email = $_GET['email'];
          $hash = $_GET['hash'];
		$reply = $this->setActive->setUserActive($customer_email,$hash);
		if($reply){
			redirect('Welcome');
		}
		else{
			echo "Email already has been verified";
		}
	}
}


