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
                    <div class="sign-up-heading-wrapper d-flex justify-content-between">
                        <h4>Sign Up as Company</h4>
                        <div class="img-uplo-wrapper text-right">
                            <input type="file">
                            <h6>Upload Logo</h6>
                        </div>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Company Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
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