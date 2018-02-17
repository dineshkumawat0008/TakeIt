<?php

class AddToCartModel extends CI_Model{

	function addToCart($unique_id,$ip,$qty){

        if(isset($_SESSION['email'])){
            $customer_email=$_SESSION['email'];
        }
        if(!isset($_SESSION['email'])){
           $customer_email=''; 
        }

        $querycheck = $this->db->get_where('cart', array('ip_addr' => $ip,'unique_id'=>$unique_id,'customer_email'=>$customer_email));
        if($querycheck->row()){
        	return false;
        }

		$query = $this->db->get_where('all_products', array('unique_id' => $unique_id));
		$raw_amount = $query->row()->ins_price;
        $total_amount=$raw_amount*$qty;
        $product_image=$query->row()->product_image;
        $product_name=$query->row()->product_name;
        $this->load->helper('date');

		if(isset($_SESSION['email'])){
		 $data = array(
        'unique_id' => $unique_id,
        'product_image'=>$product_image,
        'product_name'=>$product_name,
        'ip_addr' => $ip,
        'customer_email' => $_SESSION['email'],
        'qty'=>$qty,
        'row_amount' =>$raw_amount,
        'total_amount'=>$total_amount,
        'time'=>date("Y-m-d H:i:s")
		);

		}
		if(!isset($_SESSION['email'])){
			$data = array(
        'unique_id' => $unique_id,
        'product_image'=>$product_image,
        'product_name'=>$product_name,
        'ip_addr' => $ip,
        'qty'=>$qty,
        'row_amount' =>$raw_amount,
        'total_amount'=>$total_amount,
        'time'=>date("Y-m-d H:i:s")
		);
		}
      $this->db->insert('cart', $data);
      return true;

	}
}