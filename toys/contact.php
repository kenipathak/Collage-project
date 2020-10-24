<?php
	include ('header.php');
	if(isset($_REQUEST['contact']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		$text=$_REQUEST['text'];

		$ins="insert into inquiry_table(name,email,phone,text) values('$name','$email','$phone','$text')";
		$exe=$conn->query($ins);
		if($exe)
		{
		?>
			<script>
			alert('Inquiry Send');
			window.location='index.php';
			</script>
		<?php
		}
		else
		{
		?>
			<script>
			alert('Inquiry Does Not Send');
			window.location='contact.php';
			</script>
		<?php
		}
	}
?>
      <!-- banner -->
    <div class="inner_page-banner one-img">
    </div>
    <!--//banner -->
    <!-- short -->
    <div class="using-border py-3">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                 	<a href="index.php">Home</a>
                	<span>/ /</span>
                </li>
                <li>
                	<a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
      <!-- //short-->
      <!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact US</h3>
            <div class="contact-list-grid">
            	<form action="#" method="post">
                	<div class=" agile-wls-contact-mid">
                        <div class="form-group contact-forms">
                        	<input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group contact-forms">
                        	<input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group contact-forms">
                        	<input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group contact-forms">
                        	<textarea class="form-control" name="text" rows="3"></textarea>
                        </div>
                        <button type="submit" name="contact" class="btn btn-block sent-butnn">Send</button>
                	</div>
                </form>
            </div>
        </div>
         <!--//contact-map -->
      </section>
<?php
	include('footer.php');
?>