<?php session_start(); ?>
<div class="header-navbar">
  <nav class="navbar navbar-light p-2 rounded shadow fixed-top bg-white row ">
    <div class="col-lg-4 col-8">
      <img onclick="w3_open()" class="svg-menu"style="height: 26px;width: 32px;margin-left: 20px;margin-right: 20px; margin-top:-10px;" src="icons/menu.svg">
      <a class="navbar-brand w3-xlarge" href="index.php">Affiliate Website</a>
    </div>
    <div class="col-lg-4 col-4 text-right">
      <a href="javascript:void(0);" onclick="openSearch();" class="mx-1 search1"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
      <a class="mx-1" href="makelink.php"><i class="fa fa-link fa-lg" aria-hidden="true"></i><span class="mx-1 make-link">Make Links</span></a><span class="separate">|</span>
      <?php
      if (!isset($_SESSION['emailid'])) {
      ?>
      <a class="mx-1 userbtn" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><span class="mx-1 login-signup">Login/Signup</span></a>
        <div class="dropdown-menu dropdown-menu-right1">
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signup.php">Signup</a>
        </div>
        <?php
        }
        ?>
        <?php  if (isset($_SESSION['emailid'])) {  ?>

      <a class="mx-1 userbtn" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i><span class="mx-1 my-account">My Account</span></a>  
      <div class="dropdown-menu dropdown-menu-right1">
        <a class="dropdown-item" href="myearning.php">My Earning</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="payments.php">Payments</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="my-profile.php">Profile Setting</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="history.php">Transaction History</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="retailers.php">Retailers And Profit Rates</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="working.php">How Affiliate Website Works</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="contact-us.php">Contact Us</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php" style="color: red;">Logout</a>
      </div>
        <?php
        }
        ?>
    </div>
    <div class="col-lg-4 col-sm-12 hello">
      <form action="search.php" method="GET" class="input-group">
        <input type="text" name="mysearch" class="form-control" placeholder="Search products you want">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>  
        </div>
      </form>
    </div>
  </nav>
</div>
<!-- Sidebar -->
<div class=" sidenav w3-sidebar w3-bar-block " style="" id="mySidebar">
  <button class=" w3-xlarge w3-block w3-border-bottom w3-bar-item" >CATEGORY<span onclick="w3_close()"><img class="w3-right svg-close" src="icons/close.svg"></span></button>
  <a href="#" class=" w3-border-bottom" ><img class="svg" src="icons/006-stethoscope.svg" alt="Electronics">Todays Special Offer</a>
    <button class="dropdown-btn w3-bar-item w3-border-bottom"><img class="svg" src="icons/010-shop-bag.svg" alt="Electronics">Retailer's Catogries<img class="svg-plus w3-right" src="icons/p.svg"></button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Education</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Fashion</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Electronics</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Health and Beauty</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Home and Kitchen</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/003-headphones.svg" alt="Electronics"> Electronics<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Headphone</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Mobile Accessories</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Power Banks</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Laptop & Computer</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/001-shirt.svg" alt="Men Fashion"> Men Fashion<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Tshirt</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Jeans</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Shirt</a>
      <a href="#" class="w3-border-bottom w3-bar-item">trouser</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/002-skirt.svg" alt="Women Fashion"> Women Fashion <img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Tshirt</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Shorts</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Salvar</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/004-sneakers.svg" alt=" Men Footware"> Men Footware<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Sports Shoes</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Casual Shoes</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Formal Shoes</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/005-high-heels.svg" alt="Women Footware"> Women Footware<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Sports Shoes</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Casual Shoes</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Formal Shoes</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/008-skincare.svg" alt="Beauty Product"> Beauty Product<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Skin Care</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Hair Care</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Perfumes</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/007-baby-products.svg" alt="Baby Product"> Baby Product<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Toys</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Clothes</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Baby Products</a>
    </div>
    <button class="dropdown-btn w3-border-bottom w3-bar-item">
      <img class="svg" src="icons/009-tray.svg" alt="Home & Kitchen"> Home & Kitchen<img class="svg-plus w3-right" src="icons/p.svg">
    </button>
    <div class="dropdown-container">
      <a href="#" class="w3-border-bottom w3-bar-item">Vessels</a>
      <a href="#" class="w3-border-bottom w3-bar-item">Food Material</a>
    </div>
</div>
<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
<!-------search modal-------->
<?php include('searchmodal.php');?>
<?php include('footer.php');?>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(180648)</script>