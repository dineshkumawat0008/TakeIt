<?php

class LoginModel extends CI_Model{

	function checkUser($customer_email,$customer_password){
		

		$query = $this->db->get_where('customers', array('customer_email' => $customer_email));
		

if($query){
	$queryy=$query->row_array();
	$hash = $queryy['customer_password'];
	$result=$this->getPassword($hash,$customer_password);

		//$this->load->helper('string');
		//$customer_hash = random_string('alnum', 32); 

		
		if($result){
			$user =$query->row_array();
			$name = $user['customer_name'];
			$session_email = $user['customer_email']; 
            $session_name=strtok($name, " ");
			$_SESSION['user']=$session_name;
			$_SESSION['email']=$session_email;
			
			return true;
		}
		else{
			return false;
		}
	
	}
	else
		{return false;}
	}


	function getPassword($hashedpassword,$customer_password) {
    
        //$result = $query1->row()->customer_password;
        $this->load->library('bcrypt');
        if ($this->bcrypt->check_password($customer_password, $hashedpassword)) {
            return true;
        } else {
            return false;
        }

    
    }
}

