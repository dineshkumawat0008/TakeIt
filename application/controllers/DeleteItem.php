<?php

class DeleteItem extends MY_Controller{
	function delete(){
		$ip = $this->input->ip_address();
		$unique_id = $this->input->get('deleteid');
		$this->load->model('deleteItemModel');
		$result=$this->deleteItemModel->delete($unique_id,$ip);
		$this->load->helper('url');
		redirect('Cart','refresh');
	}
}