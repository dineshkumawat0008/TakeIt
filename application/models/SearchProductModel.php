<?php

class SearchProductModel extends CI_Model{
	function searchProduct($keyword){
		$this->db->select('*');
		$this->db->from('all_products');
		$this->db->like('keyword', $keyword, 'both');
		return $result=$this->db->get()->result();

	}
}