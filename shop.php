<?php
session_start();
$servername   = "localhost";
$database = "freshbyte";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully";
  
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fresh Byte shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">	
    <link rel="stylesheet" type="text/css" href="styles/main-styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive-style-sheet.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!---==========jquery link must be placed in head==========--->	
    <script src="js/jquery-3.4.1-min.js"></script>	
	
</head>

<body>

<!---========== header-top-2 ==========--->
<section id="header">
    <div id="header-top-2">
        <div class="mybox">
            <div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
				    <div id="header-top-2-contact">
				        <ul>
						    <li><p><i class="fa fa-envelope"></i>enquiry@freshbyte.in</p></li>
						    <li><p><i class="fa fa-volume-control-phone"></i>+91-7057264071</p></li>														
						</ul>
				    </div>
				</div>
			    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
				    <div id="header-top-2-social-icon">
				        <ul>
                            <li><a href="registration.php">Register</a></li>
                            <li><a href="SignIn.php">Sign in</a></li>
                            <li><a href="#">My Account</a></li>						
						</ul>
				    </div>				
				</div> 				
			</div>
	    </div>
    </div>
<!---========== header-top-2 end ==========--->
<!---========== header-nav-1 ==========--->
    <div id="header-nav-1">
        <div class="nav-menu-1">
            <div class="mybox">
			    <div class="row">
			        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
				        <div id="site-logo-left">
                            <a href="index.html" class="site-logo"><img src="images/freshbyte5.png" alt="freshbyte"></a>
				        </div>
                        <div id="toggle-btn">                        
						    <button type="button" class="togglebtn" id="toggle-btn" onclick="myFunction(this)">
                                <span class="togglebtn-bar1"></span>
                                <span class="togglebtn-bar2"></span>
                                <span class="togglebtn-bar3"></span>                    
                            </button>							
						</div>						
					</div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
							<div id="header-menu-right">
                                    <ul>
                                        <li><a href="home.php" class="active">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="work.html">How It Works</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="contacts.html">Contact Us</a></li>										
								    </ul>	
							</div>			
					</div>
				</div>										
			</div>
	    </div>
    </div>
</section>			
<!---========== header-nav-1 end ==========--->	 
<!---==========search-bar==========--->			
    <div id="header-bottom">
        <div class="mybox">
		    <div class="row">
		  	    <div class="col-lg-3 col-md-3 col-sm-12 col-12 rounded">
					<div class="dropdown">
						<button class="dropbtn">All Categories</button>
						    <div class="dropdown-content">
								<a href="#">Vegetables</a>
								<a href="#">Fruits</a>
								<a href="#">Daily Essentials</a>
								<a href="#">Salad</a>
								<a href="#">Milk(Home Made)</a>
								<a href="#">Grocery(Organic)</a>
								<a href="#">Ready To Cook</a>
								<a href="#">Spices</a>
								<a href="#">Meat</a>	
							</div>
					</div>
				</div>
		  	    <div class="col-lg-8 col-md-8 col-sm-10 col-10">				
					<div class="header-search">
						<div id="header-search-box">					
					    	<div class="row">
						    	<div class="col-lg-10 col-md-9 col-sm-8 col-6">
						        	<div class="header-search-content">
							        	<div class="header-search-box">
								        	<form action="#" class="header_search_form clearfix">
									        	<input type="search" required="required" class="header-search-box-input" 
									                   placeholder="Search for products...">											   
								        	</form>
										</div>
									</div>	
								</div>
						    	<div class="col-lg-2 col-md-3 col-sm-4 col-6">
							    	<div id="search-button">
                                         <div class="search-button">										
												<button type="submit" name="submit" class="header_search_button trans_300" value="Submit">
													<img src="images/search.png" alt="">
												</button>
							               </div>									
										<!--<button type="submit" class="header_search_button " value="Submit">
									    	<i class="fa fa-search"></i>
										</button>-->
							    	</div>							
						    	</div>				
					    	</div>
				    	</div>
			    	</div>
				</div>	
                    <div class="col-lg-1 col-md-1 col-sm-2 col-2">
				        <div class="shopping-cart">
						    <div id="shopping-cart-icon">
							<a href="https://freshbyte.in/cart/" class="xs-single-wishList offset-cart-menu">
                                    <span class="xs-item-count highlight xscart">0</span>
                                						     <img src="images/bag.png" alt=""> 

                            </a>
							
								
							</div>	
				        </div>					
					</div>				
		    </div>
	    </div>
    </div>		
<!---==========search-bar end here==========--->


<section class="bread">
    <div class="container container-fluid">
	    <div class="row">
		    <div class="col-xs-12">
			    <ul class="breadcrumb">
				<li class="breadcrumb-item-active">Home</li>
				<li class="breadcrumb-item">Shop</li>
				</ul>
            			
			</div>
		</div>

    </div>
</section>	

<!-----------------------------Main------------------------->
		<!--<div class="section-padding">
			<div class="shop-archive">
				<div class="container">
					<div class="row">
						<div id="primary" class="content-area col-md-12">
					        <h5 class="products-header">Shop</h5>
						</div>
						<div class="col-md-6 content">
			                <div class="media">
							   <h6 class="d-flex">View</h6>
								    <ul class="nav nav-tabs shop-view-nav" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fa fa-th"></i></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-align-justify"></i></a>
										</li>
									</ul>
							</div>
													
	                    </div>
					    
					</div>
				</div>
			</div>
		</div>-->
			
	<section class="portfolio_area freshbyte padding">
		<div class="container">
			<div class="row">
				<?php 
				    error_reporting(0);
				    $sql = "SELECT * FROM productadd ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0){
						while($row = $result->fetch_array()) {
							?>
							<div class="col-lg-4 col-sm-6">
								<div class="card" style="margin-bottom:30px;">
									<div class="product-bottom">
										<div class="card-body">
										
										    <?php echo "<img src='Admin panel/".$row['image']."' height='300' width='300'/>"; ?>
											<h6 class="card-title"><?php echo $row['prod_name']; ?></h6>
											<h6 class="price-style"><?php echo '₹'.$row['reg_price'].'-'.'₹'.$row['sale_price']; ?></h6>
										</div>
										<div class="overlay">
											<a href="#"><button type="button" class="btn" title="eye"><i class="fa fa-eye" aria-hidden="true"></i></button>	</a>
											<a href="cart.php"><button type="button" class="btn" title="cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button></a>	
											<a href="#"><button type="button" class="btn" title="heart"><i class="fa fa-heart" aria-hidden="true"></i></button></a>													
										</div>
										
									</div>
								</div>
							</div>	
						<?php
						}
					}
                ?>					
							
			</div>
		</div>
	</section>
	

<!---==========footer==========--->
<section id="footer" style="background:url('images/darkgrain.png');">
<!---==========top-footer==========--->
    <div class ="section-1" id="top-footer">
	    <div class="mybox">
		    <div class="row">
			    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			        <div class="footer-widget">
					    <h4>Contact Details</h4>					
				        <div id="footer-contact">
				            <ul>
							    <h5 style="color:#111">Got Question? Call us 24/7</h5>
						        <li><p><i class="fa fa-phone-volume"></i>+91-7057264071</p></li>
								<p style="color:#111"><i class="fa fa-home"></i>  357/358 Shop No. 11, Siddhi Prestige Apt, Guruwar Peth, Pune-411002 </p>
						        <li><p><i class="fa fa-envelope"></i>enquiry@freshbyte.in </p></li>
						        							
						    </ul>
				        </div>
                    </div>					
			    </div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			        <div class="footer-widget">
					    <h4>Payment Options</h4>					
				        <div id="footer-contact">
				            <ul>
							 <li><a href="#">■ Cash On Delivery</a></li>
							<li><a href="#">■ Bank Transfer</a></li>
									
								
						    </ul>
				        </div>
                    </div>					
			    </div>	
                        	        <!--<div class="footer-btn"><a href="about-us.html" class="hvr-shutter-in-horizontal">Read More</a></div>-->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			        <div class="footer-widget">
					    <h4>Top Categoty</h4>					
				        <div id="footer-contact">
				            <ul>
								<li><a href="#">Vegetables</a></li>
								<li><a href="#">Fruits</a></li>
								<li><a href="#">Milk(Home Made)</a></li>
								<li><a href="#">Grocery(Organic)</a></li>
								<li><a href="#">Spices</a></li>	
								<li><a href="#">Meat</a></li>	
								
						    </ul>
				        </div>
                    </div>					
			    </div>	
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			        <div class="footer-widget">
					    <h4>Quick Links</h4>					
				        <div id="footer-contact">
				            <ul>
							<li><a href="#">About FreshByte​</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">How It Works</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Contact Us</a></li>	
						    </ul>
				        </div>
                    </div>					
			    </div>						
                	
		    </div>
	    </div>
    </div>	
<!---==========top-footer end here==========--->
<!---==========bottom-footer==========--->
    <div id="bottom-footer">
	    <div class="mybox">
            <div id="footer-copyright-text">		
		        <p>Copyright 2020 - <a href="index.html">FreshBytes</a>All Right Reserved. Powered By 
			    <a href="https://webbrandsolutions.com/" target="_blank">RN Webbrand Solutions Pvt. Ltd.</a><p>
		    </div>
		</div>	
    </div>  
</section>
<!---==========bottom-footer end here==========---	

<!---==========toggle-menu when screen size equal to or less than 768px==========--->
<script>
$(document).ready( function()
            {   $("#toggle-btn").click( function() {    $("#header-menu-right").slideToggle("2000");
                                                                 });
            });		
</script>
<!---==========toggle-menu when screen size equal to or less than 768px end here==========--->

<!---==========js file==========--->	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/slick-1.8.0/slick.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
<!---========== jQuery ==========--->
    <script src="js/move-top.js" type="text/javascript"></script>
    <script src="js/easing.js" type="text/javascript"></script>	
<!---========== jQuery ==========--->	
    <script src="js/collapse-menu.js" type="text/javascript"></script>
    <script src="js/fixmenu.js" type="text/javascript"></script>	
    <script src="js/bootstrap-min.js" type="text/javascript"></script>
	

</body>
</html>