<?php
	include('header.php');
?>

<div class="clearfix"></div>
		<div class="inner_content">
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="main-page.php">Home</a><span>«</span></li>
						<li>Product<span>«</span></li>	
						<li>Manage Product</li> 
					</ul>
				</div>
			</div>
			
			<div class="inner_content_w3_agile_info two_in">
				<h2 class="w3_inner_tittle" align="center">Manage Product</h2>
					<div class="forms-inner">
						<div class="wthree_general graph-form agile_info_shadow ">
							<div class="grid-1 ">
								<a href="add_product.php"><h6 align="center">ADD NEW PRODUCT HERE</h6></a>
								<hr>
									<div class="table-responsive">
										<table class="table table-hover">
										<thead>
											<tr>
												<th>Product Id</th>
												<th>Product Name</th>
												<th>Product Price</th>
												<th>Product Type</th>
												<th>Product Description</th>
												<th>Product Image</th>
												<th colspan="2" align="center">Manage</th>
											</tr>
										</thead>

										<?php
											$sel="select * from product_table order by p_type";	//query
											$exe=$conn->query($sel);
											while($fetch=$exe->fetch_object())
											{
										?>

										<tbody>
                                        <tr>
                                            <td><?php echo $fetch->p_id;?></td>
                                            <td><?php echo $fetch->p_name;?></td>
											<td><?php echo $fetch->p_price;?></td>
                                            <td><?php echo $fetch->p_type;?></td>
											<td><?php echo $fetch->p_des;?></td>
											<td><img src="product_image/<?php echo $fetch->p_image;?>" height="50px" width="50px"></td>
                                            <td>
                                            	<a href="p_delete.php?pduid=<?php echo $fetch->p_id;?>"><img src="images/delete.png" height="30px" width="30px"></a>
                                            </td>
                                            <td>
                                            	<a href="p_edit.php?euid=<?php echo $fetch->p_id;?>">
                                                	<img src="images/edit.png" height="30px" width="30px">
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <?php
	                                    	}
	                                    ?>
					
										</table>
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