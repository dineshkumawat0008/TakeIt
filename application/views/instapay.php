
	<?php 

	$name= $name;
    $email= $email;
    $phone= $phone;
    $subtotal= $subtotal;
    $purpose = "Takeit";

      $this->load->view('Instamojo.php');

      $api = new Instamojo\Instamojo('3618c9cc564154738e906752ed00760d', 'b8c199751581594a3d04d0e9045e8ac9','https://test.instamojo.com/api/1.1/');

      try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $subtotal,
        "buyer_name"=> $name,
        "phone"=> $phone,
        "send_email" => true,
         "send_sms"=> true,
        "email" =>  $email,
        "allow_repeated_payments"=> false,
        "redirect_url" => base_url()."paymentDone/done"
        
        ));
   // print_r($response);
    $pay_url =$response['longurl'];
    header("Location: $pay_url");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
    


	 ?>