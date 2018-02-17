<?php

class UpdateCartModel extends CI_Model{
	function updateCart($unique_id,$ip,$qty){

		$query = $this->db->get_where('all_products', array('unique_id' => $unique_id));
		$total_amount=$query->row()->ins_price;
		$total_amount=$total_amount*$qty;
    $this->load->helper('date');
		 $updateData = array(
           'qty' => $qty,
           'total_amount'=>$total_amount,
           'time'=>date("Y-m-d H:i:s")

        );

		if(!isset($_SESSION['email'])){
    		$this->db->update('cart', $updateData, array('unique_id' => $unique_id,'ip_addr'=>$ip));
    	}
    	else{
    		$customer_email=$_SESSION['email'];
    		$this->db->update('cart',$updateData,array('unique_id' => $unique_id,'ip_addr'=>$ip,'customer_email'=>$customer_email));
    	}
		return true;

	}
}