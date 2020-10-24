<?php
	include('header.php');
	
	if(isset($_REQUEST['pduid']))
	{
		$p_id=$_REQUEST['pduid'];
		$sel="delete from product_table where p_id='$p_id'";
		$exe=$conn->query($sel);
		if($exe)
		{
			//header('location:show.php');
			?>
			<script>
				alert('Delete Success');
				window.location='man_product.php';
			</script>
			<?php
		}
	}

?>