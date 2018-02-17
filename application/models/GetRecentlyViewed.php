<?php

class GetRecentlyViewed extends CI_Model{
	function getProducts(){
		$query = $this->db->get('recently_viewed');
		 return $result = $query->result();

	}
}