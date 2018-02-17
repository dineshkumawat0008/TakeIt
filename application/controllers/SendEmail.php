<?php


class SendEmail extends MY_Controller{

	function index(){
		$this->load->helper('url');
		$encrypted_email=$this->session->flashdata('customer_email');
		$this->load->library('encrypt');
		//$key = 'vhFHGBJhYFGHFHfhjgbTuituetuHGbnk';
		$customer_email=$this->encrypt->decode($encrypted_email);
		//echo $customer_email;
		$this->load->model('gethassh');
		$hash=$this->gethassh->gethasshh($customer_email);
		//echo $hash;
		//$key = 'vhFHGBJ64FGHFHfhjgb7ui6u5tuHGbnk';
		//$this->load->library('encrypt');
		//$customer_email=$this->encrypt->decode($encrypted_email,$key);

$subject = 'Takeit Signup Verification';
		  $message= 
        'Thanks for signing up, '.$customer_name.'!</br>
      
        Your account has been created. </br>
  
                        
        Please click this button to activate your account:</bR>
            
        <a href='.base_url() . 'emailVerification/emailVerify?'. 
        'email=' .$encrypted_email.'&hash=' .$hash.'><button>Confirm your email</button></a>';



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
		echo "Mail has been sent";
		echo $hash;
		echo $customer_email;
	}
	else{
		show_error($this->email->print_debugger());
	}
	}
}