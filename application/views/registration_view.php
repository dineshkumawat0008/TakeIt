
<?php
//session_start();
//include("functions/functions.php");
//include("connection/connection.php");
//include("mail.php");
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet"  href="<?php echo base_url();?>assets/login_css/demo.css" />
        <link rel="stylesheet"  href="<?php echo base_url();?>assets/login_css/style.css" />
		<link rel="stylesheet"  href="<?php echo base_url();?>assets/login_css/animate-custom.css" />

    </head>
    <body>
    	
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
            </div><!--/ Codrops top bar -->
			
            <header>
                <h1><a href="<?php echo site_url('Welcome');?>">TaketIt</a></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php echo form_open('registration/user_registration');?>
                                <h1>Sign Up</h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Name</label>
                                     <?php 
                                    $data = array(
									        'name'          => 'customer_name',
									        'id'            => 'usernamesignup',
                                    		 'value'        =>set_value('customer_name'));
									 
									 echo form_input($data);
                                   ?>
                                </p>
                                <font style="color:red;"><i><?php echo form_error('customer_name'); ?></i></font>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >Email</label>
                                      <?php 
                                    $data = array(
									        'name'          => 'customer_email',
									        'id'            => 'emailsignup',
                                            'type'          => 'text',
                                            'value'        =>set_value('customer_email'));
                                    echo form_input($data);
									 ?>
                                    </br>
                                    
                                </p>
                                
                                <font style="color:red;"><i><?php echo form_error('customer_email'); ?></i></font>
                                <font style="color:red;"><i><?php if(isset($email)){ echo $email;} ?></i></font>
                                <font style="color:red;"><i><?php if(isset($error)){ echo $error;} ?></i></font>

                                 <p> 
                                    <label class="youpasswd" data-icon="e">Phone<b></b> </label>
                                    <?php 
                                    $data = array(
									        'name'          => 'customer_phone',
									        'id'            => 'passwordsignup',
                                            'type'          => 'text',
                                           'value'        =>set_value('customer_phone'));
                                    echo form_input($data);
									 ?>
                                    </br>
									
                                </p>
                                <font style="color:red;"><i><?php echo form_error('customer_phone'); ?></i></font>
                                <font style="color:red;"><i><?php if(isset($phone)){ echo $phone;} ?></i></font>

                                 <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password</label>
                                     <?php 
                                    $data = array(
									        'name'          => 'customer_password',
									        'id'            => 'passwordsignup');
                                    echo form_password($data);
									 ?>
                                    </br> 
                                </p>
                                <font style="color:red;"><i><?php echo form_error('customer_password'); ?></i></font>
                               
                                <p class="signin button"> 
                                	<?php echo form_submit('register', 'Sign up'); ?>
									
								</p>
								
                                
                                
                               
                            </form>
                        </div>

                       
						
                    </div>
                </div>  
            </section>
        </div>
		
        <p style="text-align:center;padding-top:15px;color:gray;">&copy; 2017-2020,TakeIt.com to Arohi, Inc. or its affilliates</p>
  
    </body>
</html>

<?php
/*
if(isset($_POST['login']) AND isset($_GET['addtocart'])){
			
			
			session_start();
			$email = $_POST['email'];
			
			
			$password = $_POST['password'];
			
			$select_query = "select * from customers where customer_email='$email' AND customer_password='$password'";
			$run_query = mysqli_query($con,$select_query);
			
			$check_customer = mysqli_num_rows($run_query);
			
			if($check_customer==0){
				echo "<script>alert('Email or password incorrect...')</script>";
				exit();
			}
			else{
				session_start();
				$_SESSION['customer_email'] = $email;
				echo "<script>window.open('index.php','_self')</script>";
				
			}
			
			
		}




		
		if(isset($_POST['login']) AND isset($_GET['checkout'])){
			
			
			session_start();
			$email = $_POST['email'];
			
			
			$password = $_POST['password'];
			
			$select_query = "select * from customers where customer_email='$email' AND customer_password='$password'";
			$run_query = mysqli_query($con,$select_query);
			
			$check_customer = mysqli_num_rows($run_query);
			if($check_customer==0){
				echo "<script>alert('Email or password incorrect...')</script>";
				exit();
			}
			$ip = getIp();
			
			$select_cart ="select * from cart where customer_email='$email'";
			$run_select_cart = mysqli_query($con,$select_cart);
			
			$check_cart = mysqli_num_rows($run_select_cart );
			
			
			
			if($check_customer==1 AND $check_cart!=0){
				session_start();
				$_SESSION['customer_email'] = $email;
				//include("payment.php");
				
				echo "<script>window.open('payment.php','_self')</script>";
			}
			
		}
		if(isset($_POST['login']) AND !isset($_GET['checkout'])){
			$email = $_POST['email'];
			session_start();
			
			$password = $_POST['password'];
			
			$select_query = "select * from customers where customer_email='$email' AND customer_password='$password'";
			$run_query = mysqli_query($con,$select_query);
			
			$check_customer = mysqli_num_rows($run_query);
			
			
			if($check_customer==0){
				echo "<script>alert('Email or password incorrect...')</script>";
				exit();
			}
			else{
				$_SESSION['customer_email'] = $email;
				
                                
				echo "<script>window.open('customer/my_account.php','_self')</script>";
			}
		}*/
	


		/*if(isset($_POST['register'])){
			
			$customer_email = $_POST['customer_email'];
			$customer_phone = $_POST['customer_phone'];
			
			if(!filter_var($customer_email, FILTER_VALIDATE_EMAIL)){
                 echo "<script>alert('Email seems to be invalid')</script>";
				 echo "<script>window.open('login.php','_self')</script>";
                     exit();
				}
			if(!preg_match('/^\d{10}$/',$customer_phone))
				{
					echo "<script>alert('Phone no seems to be invalid')</script>";
				 echo "<script>window.open('login.php','_self')</script>";
                     exit();
				}
			
				
			else{
				
			$customer_phone = '0' . $customer_phone;
			$customer_ip = getIp();
			$customer_name = $_POST['customer_name'];
			
			$hash = md5( rand(0,1000) ); 
			
			$qu="select * from customers where customer_email='$customer_email'";
			$r=mysql_query($qu);

			if(mysql_num_rows($r)>0)
			{
			echo "<script>alert('Email already exists !')</script>";
			exit();
			}
			
			//$_SESSION['customer_email'] = $customer_email;
			//move_uploaded_file($customer_image_tmp,"customer/customer_images/$customer_image");
			
			$insert_tmp_customer = "insert into tmp_customer(tmp_customer_ip,tmp_customer_name,tmp_customer_email,tmp_customer_phone,tmp_customer_hash)
			values('$customer_ip','$customer_name','$customer_email','$customer_phone','$hash')";
			
			$run_insert_query = mysqli_query($con,$insert_tmp_customer);
			
				
				$to = $customer_email; // Send email to our user
				$subject = "Takeit Signup Verification"; // Give the email a subject 
				$message = "
				 
				Thanks for signing up!<br><br>
				Your account has been created, you can login with the following credentials after you have activated your account by pressing the button below.<br>
				 
				------------------------<br>
				Name: ".$customer_name."<br>
				Phone: ".$customer_phone."<br>
				------------------------<br>
				 
				Please click this button to activate your account:<br>
				
				<a href=\"http://www.e-takeit.com/verify.php?email=$customer_email & hash=$hash\"><button>confirm your email</button></a>";
				$mail_status=sendMail($to,$subject,$message,$customer_name);
			
				/*if(mail_status==1){
					echo "<script>alert('To confirm your account please check your email...')</script>";
				}
				if(mail_status==0){
					echo "<script>alert('failed')</script>";
				}*/
				
				
			//echo "<script>alert('To confirm your account please check your email...')</script>";	
			//echo "<script>window.open('index.php','_self')</script>";
		
			     
		//}
		//}

?>