<?php
	include('header.php');


?>

<div class="clearfix"></div>
		<div class="inner_content">
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="main-page.php">Home</a><span>«</span></li>
						<li>Client<span>«</span></li>	
						<li>Manage Client</li> 
					</ul>
				</div>
			</div>
			
			<div class="inner_content_w3_agile_info two_in">
				<h2 class="w3_inner_tittle" align="center">Manage Client</h2>
					<div class="forms-inner">
						<div class="wthree_general graph-form agile_info_shadow ">
							<div class="grid-1 ">
								<hr>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Cid</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>User Name</th>
												<th>Contact Number</th>
												<th>Gender</th>
												<th>Email Id</th>
												<th>Password</th>
												<th>Address</th>
												<th>City</th>
												<th>State</th>
												<th>zip</th>
												<th>Image</th>
												<th>Status</th>
												<th colspan="3" align="center">Manage</th>
											</tr>
											</thead>

											<?php
    											$sel="select * from customer_table";  //querry
												$exe=$conn->query($sel);  // run
												while($fetch=$exe->fetch_object())  // fetch data from db
												{
											?>

											<tbody>
                            	            <tr>
                                	            <td><?php echo $fetch->c_id;?></td>
                                    	        <td><?php echo $fetch->c_fname;?></td>
												<td><?php echo $fetch->c_lname;?></td>
                                        	    <td><?php echo $fetch->c_uname;?></td>
												<td><?php echo $fetch->c_number;?></td>
                                        	    <td><?php echo $fetch->c_gender;?></td>
                                        	    <td><?php echo $fetch->c_email;?></td>
                                        	    <td><?php echo $fetch->c_pwd;?></td>
                                        	    <td><?php echo $fetch->c_address;?></td>
                                        	    <td><?php echo $fetch->c_city;?></td>
                                        	    <td><?php echo $fetch->c_state;?></td>
                                        	    <td><?php echo $fetch->c_zip;?></td>
                                            	<td><img src="upload/<?php echo $fetch->c_image;?>" height="50px" width="50px"></td>
												<td>
                                                	<span class="badge badge-danger">in progress</span>
                                            	</td>
                                            	<td>
                                            	    <img src="images/delete.png" height="30px" width="30px">
                                            	</td>
                                            	<td>
                                            	    <img src="images/edit.png" height="30px" width="30px">
                                            	</td>
                                            	<td>
                                            	   	<img src="images/block.png" height="30px" width="30px">
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