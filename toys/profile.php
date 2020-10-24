<?php
  include('header.php');
  session_start();
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


<div class="inner_page-banner one-img"></div>
      <!--//banner -->
      <!-- short -->
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          Home <span>/ /</span> Profile
        </li>
      </ul>
    </div>
</div>
<!-- //short-->
<!--//banner -->

  <!-- Start error section  -->
<section id="mu-error">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-error-area">
          <div class="container">
            <div class="jumbotron text-center">
              <?php
                $c_id=$_SESSION['c_id'];
                $sel="select * from customer_table where c_id='$c_id'"; //query
                $exe=$conn->query($sel);
                while($fetch=$exe->fetch_object())
                  {
                    ?>
                    <p align="center"><img src="upload/<?php echo $fetch->c_image;?>" height="100px" width="100px" style="border:#000 dotted"></p>
                    <form action="" method="post"  class="form-group" enctype="multipart/form-data">
                      <table align="center" border="2"  class="table table-striped">  
                        <tr>
                          <th>First Name</th>
                          <td><?php echo $fetch->c_fname;?></td>
                        </tr>
                        <tr>
                          <th>Last Name</th>
                          <td><?php echo $fetch->c_lname;?></td>
                        </tr>
                        <tr>
                          <th>User Name</th>
                          <td><?php echo $fetch->c_uname;?></td>
                        </tr>
                        <tr>
                          <th>Email Id</th>
                          <td><?php echo $fetch->c_email;?></td>
                        </tr>
                        <tr>
                          <th>Contact Number</th>
                          <td><?php echo $fetch->c_number;?></td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td><?php echo $fetch->c_address;?></td>
                        </tr>
                        <tr>
                          <th>City</th>
                          <td><?php echo $fetch->c_city;?></td>
                        </tr>
                        <tr>
                          <th>State</th>
                          <td><?php echo $fetch->c_state;?></td>
                        </tr>
                        <tr>
                          <th>Zip</th>
                          <td><?php echo $fetch->c_zip;?></td>
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td><?php echo $fetch->c_gender;?></td>
                        </tr>
                        <tr>
                          <th>Image</th>
                          <td><img src="upload/<?php echo $fetch->c_image;?>" height="50px" width="50px"></td>
                        </tr>
                        <tr>
                          <th>Edit Profile</th>
                          <td><a href="edit.php?euid=<?php echo $fetch->c_id;?>"><img src="images/edit.jpg" height="30px" width="30px"></a></td>
                        </tr>
                      <?php
                        }
                      ?>
                      </table>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- End error section  -->
 

 <?php
 include('footer.php');
 ?>