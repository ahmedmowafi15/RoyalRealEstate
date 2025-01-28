<?php
include('includes/header.php');
   
login_check_pages();

?>


<section id="contact-form" class="sections">
      <div class="container header">
            <div class="row text-center">
                <h5>Login Now</h5>
                <p>Have questions or inquiries? Reach out to us using the form below:</p>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php display_message(); ?>
                <?php validate_user_login(); ?>
            </div>
        </div>
            <div class="row">
                <form action="" method="post" >
                   <div class="row">
                   
                    <div class="col-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
                    </div>
                   

                    <button type="submit" class="btn btn-success">Login</button>
                   </div>
                </form>
               <?php  if(isset($error)){?>
                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                <?php }?>
                <div class="contact-info">
                    <p>Create New account :<a href="register.php"> Register Now</a></p>
                </div>
                   
            </div>
        </div>

</section>

<?php
include('includes/footer.php');
?>