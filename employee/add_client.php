<?php
	include('header.php');
?>
	<div class="clearfix"></div>
		<div class="inner_content">
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="main-page.php">Home</a><span>«</span></li>
						<li>Employee<span>«</span></li>	
						<li>Add Employee</li>
					</ul>
				</div>
			</div>
					<!-- //breadcrumbs -->
			<div class="inner_content_w3_agile_info two_in">
			  <h2 class="w3_inner_tittle" align="center">Fill the Form</h2>
				<div class="forms-inner">
					<div class="wthree_general graph-form agile_info_shadow ">
						<h3 class="w3_inner_tittle two" align="center">Add Employee</h3>
							<div class="grid-1 ">
								<div class="form-body">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="FirstName" class="col-sm-2 control-label">First Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" id="FirstName" placeholder="" value="" required="">
												</div>
										</div>
										
										<div class="form-group">
											<label for="LastName" class="col-sm-2 control-label">Last Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control1" id="LastName" placeholder="" value="" required="">
												</div>
										</div>
										
										<div class="form-group"> 
											<label class="col-sm-2 control-label" for="UserName">User Name</label>
												<div class="col-md-8">
													<div class="input-group"> 
														<span class="input-group-addon">@</span> 
															<input type="text" class="form-control1 icon" id="UserName" placeholder="Username" required=""> 
													</div>
												</div>
										</div>
											
										<div class="form-group">
											<label class="col-sm-2 control-label" for="Email">Email Id</label>
												<div class="col-md-8">
													<div class="input-group">							
														<span class="input-group-addon">
															<i class="fa fa-envelope-o"></i>
														</span>
														<input type="text" class="form-control1 icon" id="Email" placeholder="abc65@gmail.com">
													</div>
												</div>
										</div>
										
										<div class="form-group">
											<label for="pwd" class="col-sm-2 control-label">Password</label>
												<div class="col-sm-8">
													<input type="password" class="form-control1" id="pwd" placeholder="" value="" required="">
												</div>
										</div>
										
										<div class="form-group">
											<label for="address" class="col-sm-2 control-label">Address</label>
												<div class="col-sm-8">
													<textarea name="address" id="address" cols="50" rows="8" class="form-control1"></textarea>
												</div>
										</div>
										
										<div class="form-group">
											<label for="country" class="col-sm-2 control-label">Country</label>
												<div class="col-sm-8">
													<select name="country" id="country" class="form-control1">
														<option>---select country---</option>
														<option>India</option>
														<option>UK</option>
														<option>USA</option>
														<option>Canada</option>
													</select>
												</div>
										</div>
										
										<div class="form-group"> 
											<div class="col-sm-2 control-label">
												<label for="exampleInputFile" >File input</label> 
											</div>
											<div class="col-sm-2 control-label">
												<input type="file" id="exampleInputFile"> 
											</div>	
										</div>
										
										<div class="form-group">
											<div class="checkbox" align="center"> 
												<label> <input type="checkbox"> Check me out </label>
											</div> 
										</div>
										
										<div class="form-group">
											<div class="bs-component mb20" align="center">
												<button type="button" class="btn btn-lg btn-primary btn-block">Primary</button>
											</div>
										</div>
									
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	
<?php
	include('footer.php');
?>