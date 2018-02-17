<?php

class TempUserModel extends CI_Model{

	function insertUser($customer_name,$customer_email,$customer_phone,$customer_password){
		
$query = $this->db->get_where('customers', array('customer_email' => $customer_email));
$phone = $query->row()->customer_phone;
if(!$query->row()->customer_email){

		$this->load->helper('string');
		$customer_hash = random_string('alnum', 32); 

		$data = array(
        'customer_name' => $customer_name,
        'customer_email' => $customer_email,
        'customer_password' => $customer_password,
        'customer_phone' =>$customer_phone,
        'hash' => $customer_hash
		);
		$inserted = $this->db->insert('customers', $data);
		if($inserted){
            $session_data=strtok($customer_name, " ");
			$_SESSION['user']=$session_data;
			$_SESSION['email'] =$customer_email;
			$_SESSION['phone'] = $phone;
			
			return true;
		}
		else{
			return false;
		}
	
	}
	else
		{return false;}

	}

}