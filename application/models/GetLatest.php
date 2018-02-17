<?php

class GetLatest extends CI_Model{
	function getProducts(){
		$query = $this->db->get('latest_products');
		 return $result = $query->result();

	}
}