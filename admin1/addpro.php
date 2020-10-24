<?php
	include('header.php');
	if(isset($_REQUEST['add_pro']))
	{
		$p_name=$_REQUEST['p_name'];
		$p_price=$_REQUEST['p_price'];
		$p_des=$_REQUEST['p_des'];
		$p_arr=$_REQUEST['p_type'];
		$p_type=implode(",", $p_arr);

		$ins="insert into product_table(p_name,p_price,p_des,p_type)values('$p_name','$p_price','$p_des','$p_type')";
		$exe=$conn->query($ins);
		if($exe)
		{
			echo "product added";
		}
		else
		{
			echo "product does not added";
		}
	}
?>

<div class="clearfix"></div>
<div class="inner_content">
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="main-page.php">Home</a><span>«</span></li>
				<li>Forms <span>«</span></li>
				<li>Inputs</li>
			</ul>
		</div>
	</div>
	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle" align="center">ADD PRODUCT</h2>
	<div class="wthree_general graph-form agile_info_shadow ">
		<div class="grid-1 ">
			<div class="form-body">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="p_name" placeholder="Product Name">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Product Price</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="p_price" placeholder="Product Price">
						</div>
					</div>
					<div class="form-group">
						<label for="txtarea1" class="col-sm-2 control-label">Product Description</label>
						<div class="col-sm-8">
							<textarea name="txtarea1" id="txtarea1" name="p_des" cols="50" rows="4" placeholder="Product Description" class="form-control1"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Product Type</label>
						<div class="col-sm-8">
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Showpiece</label>
							</div>
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Wall Decal</label>
							</div>
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Ideol</label>
							</div>
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Gifts</label>
							</div>
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Unique</label>
							</div>
							<div class="checkbox-inline1">
								<label><input type="checkbox" name="p_type[]"> Lights</label>
							</div>
						</div>
					</div>
					<div align="center">
						<input type="submit" name="add_pro" class="btn btn-default" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	include('footer.php');
?>																			