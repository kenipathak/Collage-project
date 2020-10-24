<?php

include('conn.php');



if(isset($_REQUEST['duid']))
{
	$uid=$_REQUEST['duid'];
	
	$sel="select * from user where uid='$uid'";
	$exe=$conn->query($sel);
	$fetch=$exe->fetch_object();
	
	$img=$fetch->file1;
	$status=$fetch->status;
	
	if($status=="Block")
	{
		$sel="delete from user where uid='$uid'";
		$exe=$conn->query($sel);
		if($exe)
		{
			unlink('upload/'.$img);
			//header('location:show.php');
			?>
			<script>
			alert('Delete Success');
			window.location='show.php';
			</script>
			<?php
		}
	}
	else
	{
		
		?>
				<script>
				alert('Before delete Block user Than delete');
				window.location='show.php';
				</script>
		<?php	
		
	}
	
}


if(isset($_REQUEST['dfid']))
{
	$uid=$_REQUEST['duid'];
	$sel="delete from user where uid='$uid'";
	$exe=$conn->query($sel);
	if($exe)
	{
		//header('location:show.php');
		?>
        <script>
		alert('Delete Success');
		window.location='show.php';
		</script>
        <?php
	}
	
	
}
	?>