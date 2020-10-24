<?php
	session_start();
	unset($_SESSION['admin']);
?>
<script>
		alert('Logout Success');
		window.location='index.php';
</script>
<?php
		
?>