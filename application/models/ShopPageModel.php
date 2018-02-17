<?php

class ShopPageModel extends CI_Model{
	function getProducts(){

		$query = $this->db->get('all_products');
		 return $result = $query->result();

	}
	function getBrandProducts($brandname){
		
		$query = $this->db->get_where('all_products', array('product_brand' => $brandname), 1);
		 return $result = $query->result();

	}
}