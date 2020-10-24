<?php
	include('header.php');
	
	if(isset($_REQUEST['duid']))
	{
		$c_id=$_REQUEST['duid'];
		$sel="delete from customer_table where c_id='$c_id'";
		$exe=$conn->query($sel);
		if($exe)
		{
			//header('location:show.php');
			?>
			<script>
				alert('Delete Success');
				window.location='man_cust.php';
			</script>
			<?php
		}
	}

	if(isset($_REQUEST['delt']))
	{
		$i_id=$_REQUEST['delt'];
		$sel="delete from inquiry_table where i_id='$i_id'";
		$exe=$conn->query($sel);
		if($exe)
		{
			//header('location:show.php');
			?>
			<script>
				alert('Delete Success');
				window.location='man_inquiry.php';
			</script>
			<?php
		}
	}

	if(isset($_REQUEST['fdelt']))
	{
		$f_id=$_REQUEST['fdelt'];
		$sel="delete from feedback where f_id='$f_id'";
		$exe=$conn->query($sel);
		if($exe)
		{
			//header('location:show.php');
			?>
			<script>
				alert('Delete Success');
				window.location='man_feedback.php';
			</script>
			<?php
		}
	}

?>