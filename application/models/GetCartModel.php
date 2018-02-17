<?php
class GetCartModel extends CI_Model{
    function getDetails($ip){
        
    	if(!isset($_SESSION['email'])){
    		$query = $this->db->get_where('cart', array('ip_addr' => $ip));
    	}
    	else{
    		$query = $this->db->get_where('cart', array('ip_addr' => $ip,'customer_email'=>$_SESSION['email']));
    	}

    	return $result = $query->result();

    }


}

?>