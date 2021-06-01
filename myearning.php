<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/css1.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
    .myearning_nav__link--active {
    color: #009578;
    }
  </style>
</head>
<body>
<?php include 'menu.php';
    require'connection.php';
    $userid=$_SESSION['user_id'];
    $q="SELECT * FROM users WHERE user_id = '$userid' ";
    $result = mysqli_query($con,$q);
    $row1=mysqli_fetch_assoc($result);
?>
<div class="pt-4">
<div class="my-earning-main-page pt-5">
  <div class="row px-3">

    <div class="col-md-4 col-lg-4 p-2">
      <div class="card profile-card-3">
        <div class="card-header bg-dark text-white">
          <div>
            <h5>My Profile</h5>
          </div>
        </div>
        <div class="background-block">
          <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
        </div>
        <div class="profile-thumb-block">
          <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
        </div>
        <div class="card-content">
          <h2>Justin Mccoy<small>Designer</small></h2>
            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 p-2">
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="myearningcard bg-c-blue order-card">
                <div class="myearningcard-block">
                    <h6 class="my-40">Total Earning</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>&#8377;<?php echo $row1['total_earning']; ?></span></h2>
                    <p class="my-4">Total Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="myearningcard bg-c-green order-card">
                <div class="myearningcard-block">
                    <h6 class="my-40">Paid Earning</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>&#8377;<?php echo $row1['paid_earning']; ?></span></h2>
                    <p class="my-4">Paid Orders<span class="f-right">446</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="myearningcard bg-c-yellow order-card">
                <div class="myearningcard-block">
                    <h6 class="my-40">Pending Earning</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>&#8377;<?php echo $row1['pending_earning']; ?></span></h2>
                    <p class="my-4">Pending Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="myearningcard bg-c-pink order-card">
                <div class="myearningcard-block">
                    <h6 class="my-40">Approved Earning</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>&#8377;<?php echo $row1['approved_earning']; ?></span></h2>
                    <p class="my-4">Approved Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
  </div>
  <div class="text-center justify-content-center">
               <button type="button" class="btn btn-warning">Redeem</button><br>
               <h6><i>(Minimum redeemable amount is Rs.10)</i></h6>
        </div>
</div>
    </div>
  </div>
</div>
</div>


<?php include 'footer.php';?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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