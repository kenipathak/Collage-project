<?php
				//server name/user name/pass/db name
$conn=new MySQLi('localhost','root','root','home_decor');
session_start();

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


      <style>
         .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
         }

         .dropdown {
            position: relative;
            display: inline-block;
         }

         .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
         }

         .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
         }

         .dropdown-content a:hover {background-color: #ddd;}

         .dropdown:hover .dropdown-content {display: block;}

         .dropdown:hover .dropbtn {background-color: #3e8e41;}
      </style>


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
   <?php
		if(isset($_SESSION['c_id']))
   {
   ?>


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
                           <div class="dropdown">
                           <li>
                            	<span class="far fa-user"></span>
                           </li>
                              	<div class="dropdown-content">
                                	<a href="profile.php">Profile</a>
                                	<a href="feedback.php">Feedback</a>
                                	<a href="logout.php">Logout</a>
                              	</div>
                            </div>
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
                     <a class="nav-link" href="index.php">Home</span></a>
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
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                     </a>
                     <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="showpiece.php">Showpiece</a>
                        <a class="nav-link " href="light.php">Light-Brite</a>
                        <a class="nav-link " href="walldecal.php">Wall decal</a>
                        <a class="nav-link " href="unique.php">Unique-tunique</a>
                        <a class="nav-link " href="gifts.php">Gifts</a>
                        <a class="nav-link " href="ideols.php">Ideols</a>
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
      <?php
         }
         else
         {
      ?>
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
                                 <span class="far fa-user"></span>
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
                     <a class="nav-link" href="index.php">Home</span></a>
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
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                     </a>
                     <div class="dropdown-content" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="showpiece.php">Showpiece</a>
                        <a class="nav-link " href="light.php">Light-Brite</a>
                        <a class="nav-link " href="walldecal.php">Wall decal</a>
                        <a class="nav-link " href="unique.php">Unique-tunique</a>
                        <a class="nav-link " href="gifts.php">Gifts</a>
                        <a class="nav-link " href="ideols.php">Ideols</a>
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
<?php
   }
?>