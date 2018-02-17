<?php

class GetTopSellings extends CI_Model{
	function getProducts(){
		$query = $this->db->get('top_sellings');
		 return $result = $query->result();

	}
}