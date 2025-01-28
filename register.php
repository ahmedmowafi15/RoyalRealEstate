<?php
include('includes/header.php');
 
login_check_pages();

?>


<section id="contact-form" class="sections">
      <div class="container header">
            <div class="row text-center">
                <h5>Create new account Now</h5>
                <!-- <p>Have questions or inquiries? Reach out to us using the form below:</p> -->
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php display_message(); ?>
                <?php validate_user_registration(); ?>
            </div>
        </div>
            <div class="row">
                <form action="" method="post" >
                   <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="name">Name:</label>
                        <input type="text"  class="form-control" placeholder="Enter Name" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" placeholder="Enter Phone" id="phone" name="phone" required>
                    </div>
                    <div class="col-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
                    </div>
                    <div class="col-12">
                        <label for="confirm_password">Password Confirmation:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="confirm_password" name="confirm_password" required>
                    </div>
                 
                   

                    <button type="submit" class="btn btn-success">Login</button>
                   </div>
                </form>
                <div class="contact-info">
                    <p>Already have account :<a href="login.php"> Login</a></p>
                </div>
                   
            </div>
        </div>

</section>

<?php
include('includes/footer.php');
?>