<?php
	include('header.php');

	if(isset($_REQUEST['add_pro']))
{
	$p_name=$_REQUEST['p_name'];
	$p_price=$_REQUEST['p_price'];
	$p_des=$_REQUEST['p_des'];
	$p_type_arr=$_REQUEST['p_type'];
	$p_type=implode(",",$p_type_arr);//array convert to string
	
		//img upload
	$p_image=$_FILES['p_image']['name'];  // get file name request
	$path='product_image/'.$p_image;    // set path
	$tmp_name=$_FILES['p_image']['tmp_name']; // create tmp file
 	move_uploaded_file($tmp_name,$path); // move tmp file in to path

	
	echo $ins="insert into product_table(p_name,p_price,p_des,p_type,p_image)values('$p_name','$p_price','$p_des','$p_type','$p_image')";
	$exe=$conn->query($ins);
	if($exe)
	{
		?>
			<script>
				alert('Product Added Successfully');
				window.location='man_product.php';
			</script>
		<?php
	}
	else
	{
		?>
			<script>
				alert('Product does not Added');
				window.location='add_product.php';
			</script>
		<?php
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
													<input type="text" class="form-control1" id="FirstName" name="p_name" placeholder="" value="" required="">
												</div>
										</div>

										<div class="form-group">
											<label for="FirstName" class="col-sm-2 control-label">Product Price</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" id="FirstName" name="p_price" placeholder="" value="" required="">
												</div>
										</div>
										
										<div class="form-group">
											<label for="address" class="col-sm-2 control-label">Product Description</label>
												<div class="col-sm-8">
													<input type="textarea" name="p_des" id="address" cols="50" rows="8" class="form-control1" required="">
												</div>
										</div>
										
										<div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Product Type</label>
											<div class="col-sm-8">
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Showpiece"> Showpiece</label>
												</div>
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Wall Decal"> Wall Decal</label>
												</div>
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Ideols"> Ideols</label>
												</div>
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Gifts"> Gifts</label>
												</div>
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Unique-Tunique"> Unique-Tunique</label>
												</div>
												<div class="checkbox-inline1">
													<label><input type="checkbox" name="p_type[]" value="Light-Bright"> Light-Bright</label>
												</div>
											</div>
										</div>

										
										<div class="form-group"> 
											<div class="col-sm-2 control-label">
												<label for="exampleInputFile" >Product Image</label> 
											</div>
											<div class="col-sm-2 control-label">
												<input type="file" id="exampleInputFile" name="p_image"> 
											</div>	
										</div>
										
										<div class="form-group">
											<div class="bs-component mb20" align="center">
												<button type="submit" name="add_pro" class="btn btn-lg btn-primary btn-block">Add Product</button>
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