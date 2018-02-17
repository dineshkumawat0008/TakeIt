<?php

class SetActive extends CI_Model{

	function setUserActive($customer_email,$hash){
	$active=0;
	$ip = $this->input->ip_address();
	$query = $this->db->get_where('customers', array('customer_email' => $customer_email,'hash'=>$hash,'active'=>$active));


	if($query){
       $active=1;
		$data = array(
        'active' => $active
);
		$updateData = array(
           'customer_email' => $customer_email,
           

        );
        
		$this->db->where('customer_email', $customer_email);
        $this->db->update('customers', $data);
        $this->db->update('cart', $updateData, array('ip_addr'=>$ip));
        $name = $query->row()->customer_name;
        $email = $query->row()->customer_email;
        $phone = $query->row()->customer_phone;
        $_SESSION['user'] = strtok($name, " ");
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        return true;
	}
	else{
		return false;
	}
	
	}

}