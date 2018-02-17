<?php

 $this->load->view('Instamojo.php');

  $api = new Instamojo\Instamojo('3618c9cc564154738e906752ed00760d', 'b8c199751581594a3d04d0e9045e8ac9','https://test.instamojo.com/api/1.1/');
  $payid=$_GET['payment_request_id'];

   try {
    $response = $api->paymentRequestStatus($payid);
     
      $response['payments'][0]['payment_id'];
      $response['payments'][0]['buyer_name'];
     $response['payments'][0]['buyer_email'];
        
   $this->load->helper('url');
   redirect('welcome');
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}



?>