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
                        <h4>Sign Up As A User</h4>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="col-lg-6">
                                    <button class="form-control btn">Sign Up</button>
                                </div>
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