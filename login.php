<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/css1.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php include('menu.php');?>
<div class="upperbody">
    <h2 class="logintext text-align-center">Earn Upto ₹20,000 Each Month!</h2>
    <div class="login-container">
                    <div class="row">
                        <div class="col-md-6 login-form-1">
                            <h3 style="font-weight:bold;">SIGNIN</h3>
                            <h3><i class="text-center fa fa-rocket fa-3x" aria-hidden="true"></i></h3>
                            <h4 style="color:white; text-align: center;">Go grab your deals and share with your friends to get</h4>
                            <h1 style="color:white; font-weight:bolder; text-align: center;">CASHBACK</h1>
                        </div>
                        <div class="col-md-6 col-sm-12 login-form-2">
                            <div class="login-logo">
                                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            </div>
                            <h3 style="font-weight:bold;">SIGN IN</h3>
                            <form action="validation.php" method="post" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" name="emailid" class="form-control" placeholder="Your Email *" required="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password *" required/>
                                    <div id="logerror" style="color: red;">
                                      <?php
                                            if(isset($error) && !empty($error)){
                                          ?>
                                          <span class="error"><?= $logerror; ?></span>
                                          <?php
                                      }
                                      ?></div>
                                </div>
                                <a href="forgetpwd.php" class="forgetpwd" value="Login">Forgot Password?</a>
                                <br>
                                <br>
                                <div class="form-group text-center">
                                    <button type="submit" class="submitbtn text-center">LOGIN </button>
                                </div>
                            </form>
                                <div class="form-group text-center">
                                    <br>
                                    <span style="color: black;">New to Website? </span><a href="signup.php" class="forgetpwd">Signup Now</a>
                                </div>
                        </div>
                    </div>
                </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>
