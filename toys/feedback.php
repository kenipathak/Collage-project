<?php
	include('header.php');
    //session_start();
    if(isset($_SESSION['c_id']))
    {
    }
    else
    {
      ?>  
        <script>
            alert('Please Login Here');
            window.location='user_login.php';
        </script>
        <?php
    }
?>
    <!-- banner -->
    <div class="inner_page-banner one-img">
    </div>
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
                	<a href="feedback.php">Feedback</a>
                </li>
            </ul>
        </div>
    </div>
      <!-- //short-->
      <?php
        if(isset($_REQUEST['feed']))
        {
            $c_id=$_REQUEST['id'];
            $cmtbox=$_REQUEST['cmtbox'];

            $ins="insert into feedback(c_id,cmtbox) values('$c_id','$cmtbox')";
            $exe=$conn->query($ins);
                if($exe)
                    {
                        ?>
                            <script>
                                alert('Feedback Submitted');
                                window.location='index.php';
                            </script>
                        <?php
                    }
                    else
                    {
                        ?>
                            <script>
                                alert('Feedback Does Not Submitted');
                                window.location='feedback.php';
                            </script>
                        <?php
                    }
        }
      ?>

      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Feedback Form</h3>
            <div class="contact-list-grid">
            <?php
              $c_id=$_SESSION['c_id'];
              $sel="select * from customer_table where c_id='$c_id'"; //query
              $exe=$conn->query($sel);
              while($fetch=$exe->fetch_object())
              {
                ?>
            	<form action="" method="post">
                	<div class=" agile-wls-contact-mid">
                    	<div class="form-group contact-forms">
                            <input type="text" class="form-control" value="<?php echo $fetch->c_id;?>" name="id">
                        </div>
                        <div class="form-group contact-forms">
                        	<input type="text" class="form-control" value="<?php echo $fetch->c_uname;?>" name="name">
                    	</div>
                    	<div class="form-group contact-forms">
                        	<input type="email" class="form-control" value="<?php echo $fetch->c_email;?>" name="email">
                    	</div>
                    	<div class="form-group contact-forms">
                        	<input type="text" class="form-control" value="<?php echo $fetch->c_number;?>" name="phone">
                    	</div>
                    	<div class="form-group contact-forms">
                        	<textarea class="form-control" name="cmtbox" placeholder="Start writing your feedback here" rows="3"></textarea>
                    	</div>
                    	<button type="submit" name="feed" class="btn btn-block sent-butnn">Send</button>
                	</div>
                    <?php
                        }
                    ?>
                </form>
            </div>
        </div>
         <!--//contact-map -->
      </section>
<?php
	include('footer.php');
?>