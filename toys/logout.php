<?php
session_start();
unset($_SESSION['customer']);//single
unset($_SESSION['c_id']);//single

//session_destroy();
?>
        <script>
		alert('logout Success');
		window.location='user_login.php';
		</script>
        <?php

?>