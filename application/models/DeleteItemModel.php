<?php

class DeleteItemModel extends CI_Model{
	function delete($unique_id,$ip){
		if(!isset($_SESSION['email'])){
    		$this->db->delete('cart', array('unique_id' => $unique_id,'ip_addr'=>$ip));
    	}
    	else{
    		$customer_email=$_SESSION['email'];
    		$this->db->delete('cart',array('unique_id' => $unique_id,'ip_addr'=>$ip,'customer_email'=>$customer_email));
    	}

    	return true;

    }
	
}