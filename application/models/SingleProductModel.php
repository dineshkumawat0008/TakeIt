<?php

class SingleProductModel extends CI_Model{
	function getProductLatest($unique_id){

		$query = $this->db->get_where('latest_products', array('unique_id' => $unique_id));
		return $result=$query->result();

	}

	function getProductTopSellings($unique_id){

		$query = $this->db->get_where('top_sellings', array('unique_id' => $unique_id));
		return $result=$query->result();

	}

	function getProductRecentlyViewed($unique_id){

		$query = $this->db->get_where('recently_viewed', array('unique_id' => $unique_id));
		return $result=$query->result();

	}
	function getProductTopNew($unique_id){

		$query = $this->db->get_where('top_new', array('unique_id' => $unique_id));
		return $result=$query->result();

	}
	function getProduct($unique_id){

		$query = $this->db->get_where('all_products', array('unique_id' => $unique_id));
		return $result=$query->result();

	}
	function getProductReleted($unique_id){

		$query = $this->db->get_where('releted_products', array('unique_id' => $unique_id),3);
		return $result=$query->result();

	}
	function getProductReletedDefault(){
		$this->db->order_by('title', 'RANDOM');
		$query = $this->db->get('releted_products');
		 return $result = $query->result();

	}
	function getProductAgain($unique_id){

		$query = $this->db->get_where('all_products', array('unique_id' => $unique_id));
		return $result=$query->result();

	}

	function getBrand($unique_id){

		$query = $this->db->get_where('all_products', array('unique_id' => $unique_id));
		return $result=$query->result();

	}
}
