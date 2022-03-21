<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/signup.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="signup">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">
                    <div class="sign-up-heading-wrapper">
                        <h4>Enter Your Email</h4>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="confirm-password.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email/Username" required>
                            </div>
                            <div class="form-group ">
                                <button class="form-control btn">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footerlinks.php'; ?>