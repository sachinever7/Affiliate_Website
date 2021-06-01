<?php session_start();
?>
<div class="navigation1">
<nav class="navbar navbar-expand navbar-light shadow p-2 mb-5 bg-white rounded fixed-top">
  <a class="navbar-brand" href="#">Affiliate Website</a>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
     <div class="input-group-append">
      <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
     </div>
  </div>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php
      if (!isset($_SESSION['emailid'])) {
        ?>
        <li class="nav-item mr-sm-2 my-2 ml-2" id="login" style="display: inline;">
        <a type="button" class="btn btn-success" href="login.php" >Login</a>
      </li>
      <li class="nav-item mr-sm-2 my-2 ml-2" id="signup" style="display: inline;">
        <a type="button" class="btn btn-danger" href="signup.php">SignUp</a>
      </li>
        <?php
        }
        ?>
        <?php
        if (isset($_SESSION['emailid'])) {
        ?>
        <li class="nav-item mr-sm-2 my-2 ml-2" id="myaccount" style="display: inline;">
        <div class="dropdown">
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
          My Account
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="myearning.php">My Earning</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="myearning.php">Payments</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="myearning.php">Profile Setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="myearning.php">History</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Retailers And Profit Rates</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">How Affiliate Website Works</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
          </div>
        </div>
      </li>
        <?php
        }
        ?>
      
    </ul>
  </div>
</nav>
</div>