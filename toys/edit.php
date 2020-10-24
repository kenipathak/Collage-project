<?php

include('header.php');

session_start();

if(isset($_REQUEST['euid']))
{
  //echo $fetch->c_id;
   $c_id=$_REQUEST['euid'];
   $sel="select * from customer_table where c_id='$c_id'";
   $exe=$conn->query($sel);
   $fetch=$exe->fetch_object();
   
   $img=$fetch->c_image;

   if(isset($_REQUEST['update']))
   {
      $c_fname=$_REQUEST['c_fname'];
      $c_lname=$_REQUEST['c_lname'];
      $c_uname=$_REQUEST['c_uname'];
      $c_number=$_REQUEST['c_number'];
      $c_gender=$_REQUEST['c_gender'];
      $c_email=$_REQUEST['c_email'];
      $c_pwd=$_REQUEST['c_pwd'];
      $c_address=$_REQUEST['c_address'];
      $c_city=$_REQUEST['c_city'];
      $c_state=$_REQUEST['c_state'];
      $c_zip=$_REQUEST['c_zip'];

       //img upload
      $c_image=$_FILES['c_image']['name'];  // get file name request
      $path='upload/'.$c_image;    // set path
      $tmp_name=$_FILES['c_image']['tmp_name']; // create tmp file
      move_uploaded_file($tmp_name,$path); // move tmp file in to path // move tmp file in to path

      if($_FILES['c_image']['size']>0)
      {
         $upd="update customer_table set c_fname='$c_fname',c_lname='$c_lname',c_uname='$c_uname',c_number='$c_number',c_gender='$c_gender',c_email='$c_email',c_pwd='$c_pwd',c_address='$c_address',c_city='$c_city',c_state='$c_state',c_zip='$c_zip',c_image='$c_image' where c_id='$c_id'";

         $exe=$conn->query($upd);
         if($exe)
         {
            unlink('upload/'.$img);
            $_SESSION['customer']=$c_uname;
            //header('location:show.php');
            ?>
            <script>
            alert('Update Success');
            window.location='profile.php';
            </script>
            <?php
         }
      }
      else
      {
         $upd="update customer_table set c_fname='$c_fname',c_lname='$c_lname',c_uname='$c_uname',c_number='$c_number',c_gender='$c_gender',c_email='$c_email',c_pwd='$c_pwd',c_address='$c_address',c_city='$c_city',c_state='$c_state',c_zip='$c_zip' where c_id='$c_id'";
      
      $exe=$conn->query($upd);
         if($exe)
         {
            $_SESSION['customer']=$c_uname;
            //header('location:show.php');
            ?>
            <script>
            alert('Update Success');
            window.location='profile.php';
            </script>
            <?php
         }
         
         
      }
      
   }
   
}
/*

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
   
   
   $ins="insert into customer_table(c_fname,c_lname,c_uname,c_number,c_gender,c_email,c_pwd,c_address,c_city,c_state,c_zip,c_image) values('$fname','$lname','$uname','$number','$gender','$email','$pwd','$address','$city','$state','$zip','$c_image')";
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
*/
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
              <a href="edit.php">Edit Profile</a>
            </li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--//banner -->
<!--Typography-->
    <section class="inner-pages py-5">
        <div class="container py-xl-5 py-sm-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Edit Profile</h3>
            <!-- forms -->
            <section class="typo-section py-4 border-top border-bottom">
            <form action="" method="post" enctype="multipart/form-data">
               <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" value="<?php echo $fetch->c_fname;?>" id="fname" name="c_fname" placeholder="First Name">
                  </div>
                     <div class="form-group col-md-6">
                     <label for="lname">Last Name</label>
                     <input type="text" class="form-control" value="<?php echo $fetch->c_lname;?>" id="lname" name="c_lname" placeholder="Last Name">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="uname">User Name</label>
                     <input type="text" class="form-control" id="uname" name="c_uname" value="<?php echo $fetch->c_uname;?>" placeholder="@name" required=""> 
                  </div>
                  <div class="form-group col-md-6">
                     <label for="num">Contact Number</label>
                     <input type="text" class="form-control" id="num" value="<?php echo $fetch->c_number;?>" name="c_number" placeholder="9545212348">
                  </div>
               </div>
               <div class="form-group">
                        <div class="col-form-label pt-0">Gender</div>
                        <?php
                           $c_gender=$fetch->c_gender;
                           if($c_gender=="Male")
                              {
                        ?>
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
                           <?php
                              }
                              else
                              {
                           ?>
                              <div class="col-sm-10">
                                 <div class="form-check">
                                 <input type="radio" name="c_gender" id="male" value="Male">
                                 <label class="form-check-label" for="male">
                                       Male
                                 </label>
                                 <br>
                                 <input type="radio" name="c_gender" id="female" value="Female" checked>
                                 <label class="form-check-label" for="female">
                                       Female
                                 </label>
                                 </div>
                              </div>
                           <?php
                              }
                           ?>
                     </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="mail">Email</label>
                      <input type="email" class="form-control" value="<?php echo $fetch->c_email;?>" id="mail" name="c_email" placeholder="Email">
                  </div>
                     <div class="form-group col-md-6">
                     <label for="pass">Password</label>
                     <input type="password" class="form-control" value="<?php echo $fetch->c_pwd;?>" id="pass" name="c_pwd" placeholder="Password">
                  </div>
               </div>
               <div class="form-group">
                   <label for="inputAddress">Address</label>
                   <input type="text" class="form-control" value="<?php echo $fetch->c_address;?>" id="inputAddress" name="c_address" placeholder="1234 Main St">
                  </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputCity">City</label>
                        <input type="text" class="form-control" value="<?php echo $fetch->c_city;?>" id="inputCity" name="c_city">
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
                      <input type="text" class="form-control" value="<?php echo $fetch->c_zip;?>" id="inputZip" name="c_zip">
                  </div>
               </div>
               <div class="form-row"> 
                  <div class="form-group col-md-6">
                     <label for="image" >File input</label> 
                    <input type="file" name="c_image" id="image" value="<?php echo $fetch->c_image;?>"><img src="upload/<?php echo $fetch->c_image;?>" height="50px" width="50px">
                  </div>   
               </div>
               <div class="form-row">
                  <div>
                     <button type="submit" name="update" class="btn btn-primary">Update</button>
                  </div>
              
               </div>   

            </form>
         </section>
      </div>
   </section>


<?php
   include('footer.php');

?>