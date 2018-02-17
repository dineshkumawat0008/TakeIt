<?php

class GetTopNew extends CI_Model{
	function getProducts(){
		$query = $this->db->get('top_new');
		 return $result = $query->result();

	}
}