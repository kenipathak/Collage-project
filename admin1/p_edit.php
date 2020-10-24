<?php

include('header.php');

session_start();

if(isset($_REQUEST['euid']))
{
  //echo $fetch->c_id;
   $p_id=$_REQUEST['euid'];
   $sel="select * from product_table where p_id='$p_id'";
   $exe=$conn->query($sel);
   $fetch=$exe->fetch_object();
   
   $img=$fetch->p_image;

  if(isset($_REQUEST['update']))
  {
    $p_name=$_REQUEST['p_name'];
    $p_price=$_REQUEST['p_price'];
    $p_des=$_REQUEST['p_des'];
    $p_type_arr=$_REQUEST['p_type'];
    $p_type=implode(",",$p_type_arr);

       //img upload
    $p_image=$_FILES['p_image']['name'];  // get file name request
    $path='product_image/'.$p_image;    // set path
    $tmp_name=$_FILES['p_image']['tmp_name']; // create tmp file
    move_uploaded_file($tmp_name,$path); // move tmp file in to path // move tmp file in to path

      if($_FILES['p_image']['size']>0)
      {
         $upd="update product_table set p_name='$p_name',p_price='$p_price',p_des='$p_des',p_type='$p_type',p_image='$p_image' where p_id='$p_id'";

         $exe=$conn->query($upd);
         if($exe)
         {
            unlink('product_image/'.$img);
            //$_SESSION['admin']=$uname;
            //header('location:show.php');
            ?>
            <script>
            alert('Update Success');
            window.location='man_product.php';
            </script>
            <?php
         }
      }
   else
      {
         $upd="update product_table set p_name='$p_name',p_price='$p_price',p_des='$p_des',p_type='$p_type' where p_id='$p_id'";
      
      $exe=$conn->query($upd);
         if($exe)
         {
            //$_SESSION['admin']=$uname;
            //header('location:show.php');
            ?>
            <script>
            alert('Update Success');
            window.location='man_product.php';
            </script>
            <?php
         }
         
         
      }
      
   }
   
}
?>

<div class="clearfix"></div>
    <div class="inner_content">
      <div class="w3l_agileits_breadcrumbs">
        <div class="w3l_agileits_breadcrumbs_inner">
          <ul>
            <li><a href="main-page.php">Home</a><span>«</span></li>
            <li>Product<span>«</span></li>  
            <li>Add Product</li>
          </ul>
        </div>
      </div>
          <!-- //breadcrumbs -->
      <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle" align="center">ADD PRODUCT DETAILS HERE</h2>
        <div class="forms-inner">
          <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two" align="center">Add Product</h3>
              <div class="grid-1 ">
                <div class="form-body">
                  <div class="form-horizontal">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="FirstName" class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control1" id="FirstName" name="p_name" placeholder="" value="<?php echo $fetch->p_name;?>" required="">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="FirstName" class="col-sm-2 control-label">Product Price</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control1" id="FirstName" name="p_price" placeholder="" value="<?php echo $fetch->p_price;?>" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="address" class="col-sm-2 control-label">Product Description</label>
                        <div class="col-sm-8">
                          <input type="textarea" name="p_des" id="address" cols="50" rows="8" class="form-control1" required="" value="<?php echo $fetch->p_des;?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="country" class="col-sm-2 control-label">Product type</label>
                        <div class="col-sm-8">
                          Showpiece:<input type="checkbox" name="p_type[]" value="Showpiece" 
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Showpiece",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                            ?>><br>
                          Light-Bright:<input type="checkbox" name="p_type[]" value="Light-Bright"
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Light-Bright",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                          ?>><br>
                          Wall Decal<input type="checkbox" name="p_type[]" value="Wall Decal"
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Wall Decal",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                          ?>><br>
                          Unique-Tunique<input type="checkbox" name="p_type[]" value="Unique-Tunique"
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Unique-Tunique",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                          ?>><br>
                          Gifts<input type="checkbox" name="p_type[]" value="Gifts"
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Gifts",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                          ?>><br>
                          Ideols<input type="checkbox" name="p_type[]" value="Ideols"
                          <?php
                            $p_type=$fetch->p_type;
                            $p_type_arr=explode(',',$p_type);
                            if(in_array("Ideols",$p_type_arr))
                            {
                              echo "checked=checked"; 
                            }
                          ?>>
                        </div>
                    </div>
                    
                    <div class="form-group"> 
                      <div class="col-sm-2 control-label">
                        <label for="exampleInputFile" >Product Image</label> 
                      </div>
                      <div class="col-sm-2 control-label">
                        <input type="file" id="exampleInputFile" value="<?php echo $fetch->p_image;?>" name="p_image"><img src="product_image/<?php echo $fetch->p_image;?>" height="50px" width="50px">
                      </div>  
                    </div>
                    
                    <div class="form-group">
                      <div class="bs-component mb20" align="center">
                        <button type="submit" name="update" class="btn btn-lg btn-primary btn-block">Update</button>
                      </div>
                    </div>
                  
                  </form>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
  include('footer.php');
?>