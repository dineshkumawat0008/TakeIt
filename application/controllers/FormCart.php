<?php

class FormCart extends MY_Controller{
	function updateForm(){
		if(isset($_POST['update_cart'])){
			echo $this->input->post('qtyupdate');
			$this->load->model('updateCartModel');
			$this->updateCartModel->updateCart();
		}

		
	}
}