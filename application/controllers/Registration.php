<?php

class Registration extends MY_Controller{

	
	function user_registration(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customer_name','Name','required|trim');
		$this->form_validation->set_rules('customer_email','Email','required|trim');
		$this->form_validation->set_rules('customer_phone','Phone No','required|trim');
		$this->form_validation->set_rules('customer_password','Password','required');

		if($this->form_validation->run()){
			$this->load->helper('email');
			$customer_name = $this->input->post('customer_name');
			$customer_email = $this->input->post('customer_email');
			$customer_phone = $this->input->post('customer_phone');
			$customer_password = $this->input->post('customer_password');
			
            if (!valid_email($customer_email))
			{
				$data['email']="Email seems to be invalid !";
				$this->load->helper('url');
                $this->load->helper('form');
				 $this->load->view('registration_view.php',$data);
			        
			}
			else if(!preg_match('/^\d{10}$/',$customer_phone))
				{
					$data['phone']="Phone seems to be invalid !";
				$this->load->helper('url');
                $this->load->helper('form');
				 $this->load->view('registration_view.php',$data);
				}
			else
			{
				$this->load->model('tempUserModel');
				$this->load->library('bcrypt');
				$customer_password = $this->bcrypt->hash_password($customer_password);
				$reply=$this->tempUserModel->insertUser($customer_name,$customer_email,$customer_phone,$customer_password);
				if($reply){

					$this->load->helper('url');
					$this->load->library('encryption');
					
					$encrypted_email=$this->encryption->encrypt($customer_email);
					$this->load->model('gethassh');
					$hash=$this->gethassh->gethasshh($customer_email);
					
				   $subject = 'Takeit Signup Verification';
					  $message= 
			        'Thanks for signing up, '.$customer_name.'!</br>
			      
			        Your account has been created. </br>
			  
			                        
			        Please click this button to activate your account:</bR>
			            
			        <a href='.base_url() . 'emailVerification/emailVerify?'. 
			        'email=' .$customer_email.'&hash=' .$hash.'><button>Confirm your email</button></a>';



				   $config = array(
		        'protocol' => 'smtp',
		        'smtp_host' => 'ssl://smtp.googlemail.com',
		        'smtp_port' => 465,
		        'smtp_user' => 'takeitcorporation@gmail.com',
		        'smtp_pass' => 'takeitbusiness',
		        'mailtype'  => 'html', 
		        'charset'   => 'iso-8859-1',
		        'starttls'  => true,
		   );

		   $this->load->library('email', $config);
		   $this->email->set_newline("\r\n");  
				
				
				$this->email->from('takeitcorporation@gmail.com', 'Takeit');
				$this->email->to($customer_email);
				$this->email->subject($subject);
				$this->email->message($message);

			if($this->email->send()){
				//echo "Mail has been sent";
				redirect('Welcome');
			}
			else{
				show_error($this->email->print_debugger());
			}

			}
				else{
					$data['error']="Email already exists !";
				$this->load->helper('url');
                $this->load->helper('form');
				 $this->load->view('registration_view.php',$data);
				}
				//echo $customer_name;
			}

		}
		else{
			$this->load->helper('url');
        $this->load->helper('form');
          // echo "<script>alert('Invalid credentials please fill form again')</script>";
           $this->load->view('registration_view.php');
			}
	}

	
}