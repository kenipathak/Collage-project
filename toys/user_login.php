<?php

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
		/*$status=$fetch->status;	
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
		{*/
			
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
	//}
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

if(isset($_REQUEST['new_user']))
{

	?>
	<script>
		window.location='login.php';
	</script>
        <?php

}	

?>
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
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <!--//price range-->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
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
                  <h1><a class="navbar-brand" href="index.php">HOME DECOR</a></h1>
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
                              <a href="user_login.php">
                              <button type="button" data-toggle="modal"> <span class="far fa-user"></span></button>
                              </a>
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
            <li>
              <a href="index.php">Login</a>
            </li>
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
    					<div class="form-group col-md-6">
    						<button type="submit" name="new_user" class="btn btn-primary">New User</button>
    					</div>
      				</div>
				</form>
			</section>
		</div>
	</section>

<?php
	include('footer.php');
?>