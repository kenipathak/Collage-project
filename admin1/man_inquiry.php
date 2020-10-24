<?php
	include('header.php');
?>

<div class="clearfix"></div>
		<div class="inner_content">
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="main-page.php">Home</a><span>«</span></li>
						<li>Inquiry<span>«</span></li>	
						<li>Manage Inquiry</li> 
					</ul>
				</div>
			</div>
			
			<div class="inner_content_w3_agile_info two_in">
				<h2 class="w3_inner_tittle" align="center">Manage Inquiry</h2>
					<div class="forms-inner">
						<div class="wthree_general graph-form agile_info_shadow ">
							<div class="grid-1 ">
								<hr>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>i_id</th>
													<th>Name</th>
													<th>Email Id</th>
													<th>Phone Number</th>
													<th>Text</th>
													<th colspan="2" align="center">Manage</th>
												</tr>
											</thead>
											<?php
    											$sel="select * from inquiry_table";  //querry
												$exe=$conn->query($sel);  // run
												while($fetch=$exe->fetch_object())  // fetch data from db
												{
											?>
											<tbody>
												<tr>
													<td><?php echo $fetch->i_id;?></td>
													<td><?php echo $fetch->name;?></td>
													<td><?php echo $fetch->email;?></td>
													<td><?php echo $fetch->phone;?></td>
													<td><?php echo $fetch->text;?></td>
													<td>
														<a href="delete.php?delt=<?php echo $fetch->i_id;?>">
															<img src="images/delete.png" height="30px" width="30px">
														</a>
													</td>
													<td>
														<a href="inq_mail.php?imail=<?php echo $fetch->i_id;?>">
															<img src="images/reply.jpg" height="30px" width="30px">
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