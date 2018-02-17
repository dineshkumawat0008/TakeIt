<?php

class Login extends MY_Controller{

	function user_login(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('customer_email','Email','required|trim');
		$this->form_validation->set_rules('customer_password','Password','required');

		if($this->form_validation->run()){
			$this->load->helper('email');
			
			$customer_email = $this->input->post('customer_email');
			$customer_password = $this->input->post('customer_password');
			
			
				$this->load->model('loginModel');
				//$this->load->library('bcrypt');
				//$customer_password = $this->bcrypt->hash_password($customer_password);
				$reply=$this->loginModel->checkUser($customer_email,$customer_password);
				if($reply){
					 $this->load->helper('url');
					 if(isset($_SESSION['returncheckout'])){
					 	redirect('payment/doPayment');
					 }else{
					redirect('Welcome');
				}

					}

				else{
					$data['error']="Email or Password incorrect...!";
				$this->load->helper('url');
                $this->load->helper('form');
				 $this->load->view('login_view.php',$data);
				}

				//echo $customer_name;
			}

		
		else{
			$this->load->helper('url');
        $this->load->helper('form');
          // echo "<script>alert('Invalid credentials please fill form again')</script>";
           $this->load->view('login_view.php');
			}
	}
}