<?php include ('headerLinks.php')?>
<div class="loginscreen">
<div class= "container">

    <div class="login-form">
               <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">


                <form class="startform"id="login" action= "<? echo site_url('admin/Login/verify')?>" method="post">
                     <h2 class="text-center">Admin Register</h2>
                    <div class="form-body mt-5">
                        <p>Please enter your email and password</p>
                        <div class="form-group mb-2">
                            <input type="input" class="form-control" id="adminFIrstName" placeholder="First Name" name="adminFirstName">
                        </div>
                        <div class="form-group mb-2">
                            <input type="input" class="form-control" id="adminLastName" placeholder="Last Name" name="adminLastName">
                        </div>
                        <div class="form-group mb-2">
                            <input type="email" class="form-control" id="adminEmail" placeholder="Email Address" name="adminEmail">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" class="form-control" id="inputPassword"  name="adminpaswrd" placeholder="Password">
                        </div> 
                         <div class="form-group mb-2">
                            <input type="password" class="form-control" id="inputPassword"  name="adminConpaswrd" placeholder="Confirm Password">
                        </div>  
                        <div class="forgot">
                            <a href="reset.html">Forgot password?</a>
                        </div>
                         <div class="form-group mb-2">
                        <button type="submit" class="btn form-group btn-primary mt-2" name="register">Register</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
</div>






<?php include ('footerLinks.php')?>