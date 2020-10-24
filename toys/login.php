<?php

include('header.php');

  
if(isset($_REQUEST['submit']))
{
	
	$fname=$_REQUEST['c_fname'];
	$lname=$_REQUEST['c_lname'];
	$uname=$_REQUEST['c_uname'];
	$number=$_REQUEST['c_number'];
	$gender=$_REQUEST['c_gender'];
	$email=$_REQUEST['c_email'];
	$pwd=$_REQUEST['c_pwd'];
	$address=$_REQUEST['c_address'];
	$city=$_REQUEST['c_city'];
	$state=$_REQUEST['c_state'];
	$zip=$_REQUEST['c_zip'];
	
	//img upload
	$c_image=$_FILES['c_image']['name'];  // get file name request
    $path='upload/'.$c_image;    // set path
    $tmp_name=$_FILES['c_image']['tmp_name']; // create tmp file
    move_uploaded_file($tmp_name,$path); // move tmp file in to path // move tmp file in to path
	
	
	$ins="insert into customer_table(c_fname,c_lname,c_uname,c_number,c_gender,c_email,c_pwd,c_address,c_city,c_state,c_zip,c_image)values('$fname','$lname','$uname','$number','$gender','$email','$pwd','$address','$city','$state','$zip','$c_image')";
	$exe=$conn->query($ins);
	if($exe)
	{
		?>
				<script>
				alert('Update Success');
				window.location='user_login.php';
				</script>
				<?php
	}
	else
	{
		?>
				<script>
				alert('Update Not Success');
				window.location='login.php';
				</script>
				<?php
	}
}

if(isset($_REQUEST['user']))
{

  ?>
  <script>
    window.location='user_login.php';
  </script>
  <?php

}

?>

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
              <a href="login.php">Registration</a>
            </li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--//banner -->
<!--Typography-->
<section class="inner-pages py-5">
  <div class="container py-xl-5 py-sm-3">
    <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Registration</h3>
    <!-- forms -->
      <section class="typo-section py-4 border-top border-bottom">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="fname">First Name</label>
							<input type="text" class="form-control" id="fname" name="c_fname" placeholder="First Name">
						</div>
						<div class="form-group col-md-6">
							<label for="lname">Last Name</label>
							<input type="text" class="form-control" id="lname" name="c_lname" placeholder="Last Name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="uname">User Name</label>
							<input type="text" class="form-control" id="uname" name="c_uname" placeholder="@name" required=""> 
						</div>
						<div class="form-group col-md-6">
							<label for="num">Contact Number</label>
							<input type="text" class="form-control" id="num" name="c_number" placeholder="9545212348">
						</div>
					</div>
					<div class="form-group">
						<div class="col-form-label pt-0">Gender</div>
						<div class="col-sm-10">
							<div class="form-check">
								<input type="radio" name="c_gender" id="male" value="Male" checked>
								<label class="form-check-label" for="male">
									Male
								</label>
								<br>
								<input type="radio" name="c_gender" id="female" value="Female">
								<label class="form-check-label" for="female">
									Female
								</label>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
        				    <label for="mail">Email</label>
        				    <input type="email" class="form-control" id="mail" name="c_email" placeholder="Email">
        				</div>
       					<div class="form-group col-md-6">
    				    	<label for="pass">Password</label>
        					<input type="password" class="form-control" id="pass" name="c_pwd" placeholder="Password">
        				</div>
					</div>
					<div class="form-group">
    				    <label for="inputAddress">Address</label>
    				    <input type="text" class="form-control" id="inputAddress" name="c_address" placeholder="1234 Main St">
   					</div>
    				<div class="form-row">
    					<div class="form-group col-md-6">
        					<label for="inputCity">City</label>
            				<input type="text" class="form-control" id="inputCity" name="c_city">
        				</div>
       					<div class="form-group col-md-4">
        				    <label for="inputState">State</label>
            				<select id="inputState" class="form-control" name="c_state">
            					<option selected="">Choose...</option>
                				<option>Gujarat</option>
                				<option>Rajashthan</option>
                				<option>Chennai</option>
                				<option>Madhya Pradesh</option>
                				<option>Kerala</option>
                				<option>Karnataka</option>
            				</select>
       					</div>
        				<div class="form-group col-md-2">
           					<label for="inputZip">Zip</label>
        				    <input type="text" class="form-control" id="inputZip" name="c_zip">
        				</div>
    				</div>
    				<div class="form-row"> 
						<div class="form-group col-md-1">
							<label for="image" >File input</label> 
						</div>
						<div class="form-group col-md-1">
							<input type="file" name="c_image" id="image"> 
						</div>	
					</div>
    				<div class="form-row">
    					<div class="form-group col-md-6">
    						<button type="submit" name="submit" class="btn btn-primary">Register</button>
    					</div>
						<div class="form-group col-md-6">
							<button type="submit" name="user" class="btn btn-primary">Already have account?</button>
						</div>
    				</div> 	
				</form>
			</section>
		</div>
	</section>


<?php
	include('footer.php');

?>