<?php
require_once "Head.php";
?>
<div class="form-wrapper02">
    <form action="Registration_process.php" method="post" enctype='multipart/form-data'>
        <div class="container login-left">
            <div class = "login-box">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values.</p>
                        <hr class="mb-3">
                        <label for="username"><b>User Name</b></label>
                        <input class="form-control" id="username" type="text" name="username" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="email"  type="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password"  type="password" name="password" required>

                        <label for="cpassword"><b>Confirm Password</b></label>
                        <input class="form-control" id="cpassword"  type="password" name="cpassword" required>

                        <label for="image"><b>Upload Your Profile Pic</b></label>
                        <input id="image"  type="file" class="form-control" name="image" data-height="500" required>

                        <div class="form-group">
                            <label for="g-recaptcha"><b>Recaptcha</b></label>
                            <div class="g-recaptcha" id="html_element"
                                 data-sitekey="6LftdtYZAAAAABOGmhpnEEWZJ6yLn4yg4eNM9Yvx"></div>
                            <input class="form-control d-none" type="hidden" data-recaptcha="true" required
                                   data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
require_once "Footer.php";
?>