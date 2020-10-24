<?php
    include('header.php');
?>
        <div class="clearfix"></div>
        <!-- //w3_agileits_top_nav-->
        
<!-- /inner_content-->
                <div class="inner_content">
                    <!-- /inner_content_w3_agile_info-->

                    <!-- breadcrumbs -->
                        <div class="w3l_agileits_breadcrumbs">
                            <div class="w3l_agileits_breadcrumbs_inner">
                                <ul>
                                    <li><a href="main-page.php">Home</a><span>«</span></li>
                                    <li>Forms <span>«</span></li>
                                    <li>Inputs</li>
                                </ul>
                            </div>
                        </div>
                    <!-- //breadcrumbs -->
                    <div class="inner_content_w3_agile_info two_in">
                    <h2 class="w3_inner_tittle">Inputs</h2>
                    <!--/set-3-->
                        <div class="wthree_general">
                            <div class="grid-1 graph-form agile_info_shadow">
                                <h3 class="w3_inner_tittle two">Send Reply</h3>
                                    <form action="" method="post" class="form-horizontal">
                                    <?php
                                        $f_id=$_REQUEST['fmail'];
                                        $sel="select * from customer_table join feedback on customer_table.c_id=feedback.c_id where f_id='$f_id'";  //querry
                                        $exe=$conn->query($sel);  // run
                                        while($fetch=$exe->fetch_object())  // fetch data from db
                                        {
                                    ?>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Email Address</label>
                                            <div class="col-md-8">
                                                <div class="input-group">                           
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                    <input type="text" name="toid" class="form-control1 icon" value="<?php echo $fetch->c_email;?>" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">subject</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="subject" class="form-control1" id="focusedinput" value="<?php echo $fetch->cmtbox;?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Enter Your Message</label>
                                            <div class="col-sm-8">
                                                <textarea rows="4" cols="50" placeholder="Enter Your Message..." class="form-control1" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="bs-component mb20" align="center">
                                                <button type="submit" name="send" class="btn btn-lg btn-primary btn-block">send</button>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    <!--//set-3-->
                </div>
                <!--//forms-inner-->
            </div> 
        <!--//forms-->                                             
                    
<?php
    include('footer.php');
    require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
              
                    $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = 'kenupathak1998@gmail.com';// enter your mail

                    $mail->Password = 'kenipathak1998';// enter pass

                    $mail->setFrom('kenupathak1998@gmail.com', 'Keni Pathak');  // Enter display email & name

                    $mail->addReplyTo('kenupathak1998@gmail.com', 'Keni Pathak');  // enter reply to mail & name

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!");</script>';
                    }
               }
?> 