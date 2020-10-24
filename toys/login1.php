<?php

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

if(isset($_REQUEST['new_user']))
{

	?>
	<script>
		window.location='login.php';
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
            <li>Login</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--//banner -->
<!--Typography-->
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
                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" id="c_uname" name="c_uname" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" id="c_pwd" name="c_pwd" required="">
                           </div>
                           <button type="submit" name="user_login" class="btn subscrib-btnn">Login</button>
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

