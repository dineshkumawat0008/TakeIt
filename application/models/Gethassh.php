<?php

class Gethassh extends CI_Model{
	function gethasshh($customer_email){
		$query = $this->db->get_where('customers', array('customer_email' => $customer_email));

		return $query->row()->hash;
	}
}