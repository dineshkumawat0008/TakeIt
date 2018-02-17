

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
    <title>Takeit</title>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <!-- <a href="<?php echo base_url()?>test">gbfh</a> -->
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
                
                <div>
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            

                            <li>
                                <a href="<?php echo base_url()?>contactUs" style="text-decoration:none;"><span>Contact </span><span>Us </span><b></b></a>

                                <?php 
                                if(isset($_SESSION['user'])){?>
                                <li><a href="<?php echo site_url('logoutController');?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
logout</a></li>
                                <?php }?>
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
                        <h1><a href="./"><img src="<?php echo base_url();?>assets/img/logo.png" width="80px" height="80px"></a></h1>
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
                        <li class="active"><a href="./">Home</a></li>
                        <li><a href="<?php echo site_url('shopPage');?>">Shop page</a></li>
                        
                        
                        
                        <li><a href="#brands_area">Brands</a></li>
                        <li><a href="#">Others</a></li>
                       
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="<?php echo base_url();?>assets/img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php echo base_url();?>assets/img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								by one, get one <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php echo base_url();?>assets/img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="<?php echo base_url();?>assets/img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Apple <span class="primary">Store <strong>Ipod</strong></span>
							</h2>
							<h4 class="caption subtitle">& Phone</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>7 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">

                            <?php foreach($result  as $r): ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    
                                    <img src="<?php echo base_url();?>assets/img/<?php echo $r->product_image; ?>" alt="">
                                    <div class="product-hover">
                                        <a href="<?php echo base_url()?>welcome/index?addtocartfromindex=<?php echo $r->unique_id; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="<?php echo base_url()?>singleProduct/index?latestid=<?php echo $r->unique_id; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="<?php echo base_url()?>singleProduct/index?latestid=<?php echo $r->unique_id; ?>"><?php echo $r->product_name; ?></a></h2>
                                
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
    </div> <!-- End main content area -->
    
    <div class="brands-area" id="brands_area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'nokia'; ?>"><img src="<?php echo base_url();?>assets/img/brand1.png" alt=""></a>
                            
                            <a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'samsung'; ?>"><img src="<?php echo base_url();?>assets/img/brand3.png" alt=""></a>
                            <a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'apple'; ?>"><img src="<?php echo base_url();?>assets/img/brand4.png" alt=""></a>
                            <a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'htc'; ?>"><img src="<?php echo base_url();?>assets/img/brand5.png" alt=""></a>
                            <a href="<?php echo base_url()?>shopPage/getBrandProduct?brandname=<?php echo 'lg'; ?>"><img src="<?php echo base_url();?>assets/img/brand6.png" alt=""></a>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Selling</h2>
                        <a href="" class="wid-view-more">View All</a>

                        <?php foreach($result1  as $r): ?>
                         <div class="single-wid-product">
                            <a href="<?php echo base_url()?>singleProduct/index?topsellingsid=<?php echo $r->unique_id; ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $r->product_image; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo base_url()?>singleProduct/index?topsellingsid=<?php echo $r->unique_id; ?>"><?php echo $r->product_name; ?></a></h2>
                            <div class="product-wid-rating">
                                <?php for($i=0;$i<$r->product_ratings;$i++){?>
                                <i class="fa fa-star"></i>
                                <?php }?>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?php echo $r->ins_price; ?></ins> <del>$<?php echo $r->del_price; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>

                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>

                        <?php foreach($result2  as $r): ?>
                         <div class="single-wid-product">
                            <a href="<?php echo base_url()?>singleProduct/index?recentlyviewedid=<?php echo $r->unique_id; ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $r->product_image; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo base_url()?>singleProduct/index?recentlyviewedid=<?php echo $r->unique_id; ?>"><?php echo $r->product_name; ?></a></h2>
                            <div class="product-wid-rating">
                                <?php for($i=0;$i<$r->product_ratings;$i++){?>
                                <i class="fa fa-star"></i>
                                <?php }?>
                                
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?php echo $r->ins_price; ?></ins> <del>$<?php echo $r->del_price; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>


                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>

                        <?php foreach($result3  as $r): ?>
                        <div class="single-wid-product">
                            <a href="<?php echo base_url()?>singleProduct/index?topnewid=<?php echo $r->unique_id; ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $r->product_image; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?php echo base_url()?>singleProduct/index?topnewid=<?php echo $r->unique_id; ?>"><?php echo $r->product_name; ?></a></h2>
                            <div class="product-wid-rating">
                                <?php for($i=0;$i<$r->product_ratings;$i++){?>
                                <i class="fa fa-star"></i>
                                <?php }?>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?php echo $r->ins_price; ?></ins> <del>$<?php echo $r->del_price; ?></del>
                            </div>                            
                        </div>
                        <?php endforeach; ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
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
                            <li><a href="#">Order history</a></li>
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
                            <form action="">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
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
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
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
    
   
    
  </body>
</html>
