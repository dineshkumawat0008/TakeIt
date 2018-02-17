<?php

class DeleteCartItems extends CI_Model{
	function deleteCart($ip){
		if(!isset($_SESSION['email'])){
    		$this->db->delete('cart', array('ip_addr'=>$ip));
    	}
    	else{
    		$customer_email=$_SESSION['email'];
    		$this->db->delete('cart',array('ip_addr'=>$ip,'customer_email'=>$customer_email));
    	}

    	return true;
		
	}
}