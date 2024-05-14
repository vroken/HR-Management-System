<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
<title>Netflix - Watch TV Shows Online, Watch Movies Online</title>
</head>
<body>
    <header class="showcase">
        <div class="logo" style="width:200px;">
            <img src="<?php echo e(asset('assets/img/logss.png')); ?>">
        </div>

        <div class="showcase-content">
            <div class="formm">
                <form>
                    <h1>Sign In</h1>
                    <div class="info">
                        <input class="email" type="email" placeholder="Email or phone number"> <br>
                        <input class="email" type="password" placeholder="Password">
                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit">Sign In</button>
                    </div>
                    <div class="help">
                        <div>
                            <input value="true" type="checkbox"><label>Remember me</label>
                        </div>

                        <a href="https://www.netflix.com/dz-en/LoginHelp">Need Help ?</a>
                    
                    </div>

                </form>

            </div>
            
            <div class="fcbk">
                <a href="https://facebook.com">
                    <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
                    </a>
                <p>Login with Facebook</p>
            </div>
            <div class="signup">
                <p>New to Netflix ?</p>
                <a href="https://www.netflix.com/dz-en/">Sign up now</a>
            </div>
            <div class="more">
                <p>
                    This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a> 
                </p>
            </div>


        </div>
    </header>


</body>
</html>


<?php /**PATH D:\Laravel\New folder (2)\resources\views/login.blade.php ENDPATH**/ ?>