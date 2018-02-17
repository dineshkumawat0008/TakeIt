<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page</title>
    
    <!-- Google Fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/style/style.css" media="all"/>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area" id="front">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php
                if(!isset($_SESSION['user'])){
                echo "
                
                <ul>
                    <li > 
                    <a class='login'  href=".site_url('loginController/login_manager')."><i class='fa fa-user'></i>Login</a>

                    </li>
                    <li><a href='#'><i class='fa fa-heart'></i> Wishlist</a></li>
                    <li><a href=".site_url('Cart')."><i class='fa fa-shopping-cart'></i> My Cart</a></li>
                    <li><a href=".site_url('Checkout')."><i class='fa fa-user'></i> Checkout</a></li>

                    </ul>
                    ";
                }
                else{
                echo "
                    <li><a href=".site_url('loginController/login_manager')."><i class='fa fa-user'></i>".$_SESSION['user']."</a>


                    </li>
                    <li><a href='#'><i class='fa fa-heart'></i> Wishlist</a></li>
                    <li><a href=".site_url('Cart')."><i class='fa fa-shopping-cart'></i> My Cart</a></li>
                    <li><a href=".site_url('Checkout')."><i class='fa fa-user'></i> Checkout</a></li>
                    ";
                  
                }
                    
                ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="<?php echo base_url()?>contactUs" style="text-decoration:none;"><span>Contact </span><span>Us </span><b></b></a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="../"><img src="<?php echo base_url(); ?>assets/img/logo.png" width="80px" height="80px"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="<?php echo site_url('Cart');?>">Cart - <span class="cart-amunt">

                            <?php 
                            $total_amount=0;
                            $total_items=0;
                            
                            foreach ($cart as $c)
                                {
                                        $total_amount+=$c->total_amount;
                                        $total_items+=$c->qty;
                                    }

                             ?>

                        $<?php echo $total_amount; ?>


                    </span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $total_items; ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../">Home</a></li>
                        <li><a href="<?php echo site_url('shopPage');?>">Shop page</a></li>
                        <li class="active"><a href="#">Single product</a></li>
                        
                        <li><a href="#">Others</a></li>
                        
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url(); ?>assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url(); ?>assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url(); ?>assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="<?php echo base_url(); ?>assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img  src="<?php echo base_url(); ?>assets/img/<?php foreach($result  as $r){

                                            echo $r->product_image;
                                        } ?>" id="change" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="<?php echo base_url(); ?>assets/img/product-thumb-1.jpg" id="menuImg1" onclick="changeImage1()" alt="">
                                        <img src="<?php echo base_url(); ?>assets/img/product-1.jpg" alt="" id="menuImg2" onclick="changeImage2()" >
                                        <img src="<?php echo base_url(); ?>assets/img/product-2.jpg" alt="" id="menuImg3" onclick="changeImage3()" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php foreach($result  as $r){

                                            echo $r->product_name;

                                        } ?></h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php foreach($result  as $r){

                                            echo $r->ins_price;
                                        } ?></ins> <del>$<?php foreach($result  as $r){

                                            echo $r->del_price;
                                        } ?></del>
                                    </div>    
                                    <?php foreach($result  as $r){

                                            $_SESSION['temp_single_pro_id']=$r->unique_id;
                                        } ?>
                                    
                                    <form action="<?php echo base_url()?>singleProduct/index?quantity&addtocartfromsingle=<?php foreach($result  as $r){

                                            echo $r->unique_id;
                                        } ?>" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Brand: <a href=""><?php foreach($brand  as $b){

                                            echo $b->product_brand;

                                        } ?></a></p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p><?php foreach($brand  as $b){

                                            echo $b->product_description;

                                        } ?></p>

                                               
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">

                                <?php foreach($result1  as $r): ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <a href="<?php echo base_url()?>singleProduct/index?reletedproductid=<?php echo $r->unique_id; ?>"><img src="<?php echo base_url(); ?>assets/img/<?php echo $r->product_image; ?>" alt=""></a>
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="<?php echo base_url()?>singleProduct/index?reletedproductid=<?php echo $r->unique_id; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href=""><?php echo $r->product_name; ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$<?php echo $r->ins_price; ?></ins> <del>$<?php echo $r->del_price; ?></del>
                                    </div> 
                                </div>
                                <?php endforeach; ?>



                                                       
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Take<span>It</span></h2>
                        <p>TakeIt is leading online shopping site in India. It gives you best products at best price.Easy Shopping,Free Shipping,Secure Payment,7 Days return Policy.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#front">Go To Top</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Top Brands</h2>
                        <ul>
                           <li><a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'apple'; ?>">Apple</a></li>
                            <li><a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'samsung'; ?>">Samsung</a></li>
                            <li><a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'sony'; ?>">Sony</a></li>
                            <li><a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'htc'; ?>">HTC</a></li>
                            <li><a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'google'; ?>">Google</a></li>
                        </ul>                          
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2017 TakeIt. Arohi Inc,Ltd. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.slider.js"></script>
  
   <script language="javascript">
            function changeImage1() {
                document.getElementById("change").src=document.getElementById("menuImg1").src;
            }

            function changeImage2(){
                document.getElementById("change").src=document.getElementById("menuImg2").src;
            }
            function changeImage3(){
                document.getElementById("change").src=document.getElementById("menuImg3").src;
            }
        
    
</script>
    

  </body>
</html>