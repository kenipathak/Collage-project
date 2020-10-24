<?php
	include('header.php');
?>

<div class="clearfix"></div>
		<div class="inner_content">
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="main-page.php">Home</a><span>«</span></li>
						<li>Feedback<span>«</span></li>	
						<li>Manage Feedback</li> 
					</ul>
				</div>
			</div>
			
			<div class="inner_content_w3_agile_info two_in">
				<h2 class="w3_inner_tittle" align="center">Manage Feedback</h2>
					<div class="forms-inner">
						<div class="wthree_general graph-form agile_info_shadow ">
							<div class="grid-1 ">
								<hr>
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Fid</th>
												<th>Cid</th>
												<th>User name</th>
												<th>Number</th>
												<th>Email</th>
												<th>Feedback</th>
												<th colspan="2" align="center">Manage</th>
											</tr>
											</thead>
										
											<?php
    											$sel="select * from customer_table join feedback on customer_table.c_id=feedback.c_id";  //querry
												$exe=$conn->query($sel);  // run
												while($fetch=$exe->fetch_object())  // fetch data from db
												{
											?>

										<tbody>
                                        <tr>
                                            <td><?php echo $fetch->f_id;?></td>
                                            <td><?php echo $fetch->c_id;?></td>
											<td><?php echo $fetch->c_uname;?></td>
                                            <td><?php echo $fetch->c_number;?></td>
											<td><?php echo $fetch->c_email;?></td>
                                            <td><?php echo $fetch->cmtbox;?></td>
											<td>
                                                <a href="delete.php?fdelt=<?php echo $fetch->f_id;?>">
                                                	<img src="images/delete.png" height="30px" width="30px">
                                                </a>
                                            </td>
                                            <td>
                                            	<a href="mail.php?fmail=<?php echo $fetch->f_id;?>">
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