   <?php
   session_start();
   if(isset($_SESSION['c_id']))
   {
   }
   else
   {
   ?>
   <script>
      alert('login failed');
      window.location='user_login.php';
   </script>
   <?php
   }