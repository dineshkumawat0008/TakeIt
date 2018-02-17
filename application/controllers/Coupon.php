<?php

class Coupon extends MY_Controller{
	function discount(){
		$this->load->helper('url');
		if($this->input->post('coupon_code')=='DISHU LOVES AROHI'){
			$_SESSION['coupon_discount']=100;
			
			
		}
		else{
			$_SESSION['coupon_discount']=0;
		}
		redirect('Cart','refresh');
	}
}