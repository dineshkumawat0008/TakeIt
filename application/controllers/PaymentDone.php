<?php

class PaymentDone extends MY_Controller{

	function done(){
		$this->load->helper('url');
		$this->load->view('paymentdone.php');
	}
}