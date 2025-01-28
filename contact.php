<?php
include('includes/header.php');
?>


<section id="contact-form" class="sections">
      <div class="container header">
            <div class="row text-center">
                <h5>Contact Us</h5>
                <p>Have questions or inquiries? Reach out to us using the form below:</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="process_contact.php" method="post" onsubmit="return validateContactForm()">
                   <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="message">Message:</label>
                        <textarea id="message" class="form-control" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                   </div>
                </form>
                <div class="contact-info">
                    <p>You can contact us also at :<a href="tel: 0123456789"> 0123456789</a></p>
                    <p>Email : <a href="mailto:Royal@realestate.com">Royal@realestate.com</a></p>
                </div>
                   
            </div>
        </div>

</section>

<?php
include('includes/footer.php');
?>