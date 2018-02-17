<?php

class UpdateItem extends MY_Controller{
	function update($unique_id){
		$ip = $this->input->ip_address();
		$qty=$this->input->post('qty');
		$this->load->model('updateCartModel');
		$result=$this->updateCartModel->updateCart($unique_id,$ip,$qty);
		$this->load->helper('url');
		redirect('Cart','refresh');
		//echo $this->input->post('qty');
		//echo $unique_id;
	}
}