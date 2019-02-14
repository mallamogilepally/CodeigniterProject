<?php include ('headerLinks.php')?>
<div class="loginscreen">
<div class= "container">

    <div class="login-form">
               <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">


                <form class="startform"id="login" action= "<? echo site_url('admin/Login/verify')?>" method="post">
                     <h2 class="text-center">Admin Login</h2>
                    <div class="form-body mt-5">
                        <p>Please enter your email and password</p>
                        <div class="form-group mb-2">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="adminemail">
                        </div>
                        <div class="form-group mb-2">
                            <input type="password" class="form-control" id="inputPassword" 
                                   name="adminpaswrd"
                                   placeholder="Password">
                        </div>   
                        <div class="forgot">
                            <a href="reset.html">Forgot password?</a>
                            <a href="<?echo site_url('admin/Register')?>">Register?</a>
                        </div>
                         <div class="form-group mb-2">
                        <button type="submit" class="btn form-group btn-primary mt-2" name="signin">Login</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
</div>






<?php include ('footerLinks.php')?>