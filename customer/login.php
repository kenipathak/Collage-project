<?php
            //server name/user name/pass/db name
$conn=new MySQLi('localhost','root','root','home_decor');


session_start();


if(isset($_REQUEST['user_login']))
{
	
	$c_uname=$_REQUEST['c_uname'];
	$c_pwd=$_REQUEST['c_pwd'];
	
	$sel="select * from customer_table where c_uname='$c_uname' and c_pwd='$c_pwd'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	
	$chk=$exe->num_rows; // check unm & pass by row 
	if($chk==1)
	{
		$status=$fetch->status;	
		if($status=="Block")
		{
			
		?>
			<script>
			alert('Login Failed due to Status Block');
			window.location='user_login.php';
			</script>
			<?php		
		}
		else
		{
			
		$c_id=$fetch->c_id;
		
			
		$_SESSION['customer']=$c_uname;
		$_SESSION['c_id']=$c_id;
		?>
        <script>
		alert('login Success');
		window.location='index.php';
		</script>
        <?php
		}
	}
	else
	{
		?>
        <script>
		alert('login Failed');
		window.location='user_login.php';
		</script>
        <?php	
	}
}

?>

<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Home Decor(Online Handicraft)</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
<body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">

            </div>
         </div>
         <div class="container-fluid">
            <div class="hedder-up row">
               <div class="col-lg-3 col-md-3 logo-head">
                  <h1><a class="navbar-brand" href="index.php">Home Decor</a></h1>
               </div>
               <div class="col-lg-5 col-md-6 search-right">
                  <form class="form-inline my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Search">
                     <button class="btn" type="submit">Search</button>
                  </form>
               </div>
               <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"><a href="login.php"> <span class="far fa-user" href="login.php"></span></a></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav ">
                  <li class="nav-item ">
                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                     <a href="about.php" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="service.php" class="nav-link">Service</a>
                  </li>
                  <li class="nav-item">
                     <a href="shop.php" class="nav-link">Shop Now</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="icon.php">404 Page</a>
                        <a class="nav-link " href="typography.php">Typography</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Product
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="product.php">Kids Toys</a>
                        <a class="nav-link " href="product.php">Dolls</a>
                        <a class="nav-link " href="product.php">Key Toys</a>
                        <a class="nav-link " href="product.php">Boys Toys</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="contact.php" class="nav-link">Contact</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
	</div>
      <!--//headder-->

<div class="inner_page-banner one-img"></div>
      <!--//banner -->
      <!-- short -->
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
    	<ul class="short_ls">
        	<li>
                <a href="index.php">Home</a>
                <span>/ /</span>
            </li>
            <li>Login</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--//banner -->
<!--Typography-->
    <section class="inner-pages py-5">
        <div class="container py-xl-5 py-sm-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Login</h3>
            <!-- forms -->
            <section class="typo-section py-4 border-top border-bottom">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="c_uname">User Name</label>
        			    <input type="text" class="form-control" id="c_uname" name="c_uname" placeholder="User Name">
        			</div>
        			<div class="form-group">
    				    	<label for="c_pwd">Password</label>
        					<input type="Password" class="form-control" id="c_pwd" name="c_pwd" placeholder="Password">
        			</div>
					<div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Remember Me
                        </label>
                     </div>
                  </div>
					<div class="form-row">
    					<div class="form-group col-md-6">
    						<button type="submit" name="user_login" class="btn btn-primary">Login</button>
    					</div>
    					
    				</div>
				</form>
			</section>
		</div>
	</section>

      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>25478 Road St.121<br>USA New Hill
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4565<br>+(010)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@example1.com</a>
                     <br><a href="mailto:info@example.com">info@example2.com</a>
                  </p>
               </div>
            </div>
         </div>
		 </div>
      </section>
      <!--//subscribe-address-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Home-Decor. All Rights Reserved | Design by <a href="http://localhost/kite/toys/index.php" target="_blank">Home-Decor</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>