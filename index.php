<!DOCTYPE html>
<html>
<head>
  <title>Affiliate Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/mycard.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <style type="text/css">
    .home_nav__link--active{
    color: #009578;
    } 
  </style>
</head>
<body style="background-color: #f7f7f7;">
<?php include('connection.php');?>
 <?php include('menu.php');?>
<?php

    $query4="SELECT * FROM products WHERE product_cat_id=4";
    $stmt4=$con->prepare($query4);
    $stmt4->execute();
    $result4=$stmt4->get_result();

    $query3="SELECT * FROM products WHERE product_cat_id=3";
    $stmt3=$con->prepare($query3);
    $stmt3->execute();
    $result3=$stmt3->get_result();

    $query2="SELECT * FROM products WHERE product_cat_id=2";
    $stmt2=$con->prepare($query2);
    $stmt2->execute();
    $result2=$stmt2->get_result();

    $query1="SELECT * FROM products WHERE product_cat_id=1";
    $stmt1=$con->prepare($query1);
    $stmt1->execute();
    $result1=$stmt1->get_result();
?>
<div class="main-page">
<!----------------------------------- slideshow --------------------------------------------------------------->
<?php include('slideshow.php');?>
<!---------------------------------------------- Trending products----------------------------------------------->
<?php include('trendingproducts.php');?>
<!-------------------------------------- Featured products ------------->
<?php include('featuredproducts.php');?>
<!------------------------------------- Popular products ----------------------------------->
<?php include('popularproducts.php');?>
<!--------------------------------------- commision rate -------------------------------------------------------->
<?php include('commissionrates.php');?>
<!----------------------------------------- Deals of the day ----------------------------------------------------->
<?php include('dealsoftheday.php');?>
<!--------------------------------- how it works ----------------------------------------------------->
<?php include('working.php');?>
<!--------------------------features of website-------------------------------->
<?php include('featuresofwebsite.php');?>
<!--------------------------------------- about-------------------------------------------------->
<?php include('about.php');?>
</div>
<!----------------------------------- footer ----------------------------------------------------->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
// Open the full screen search box
function openSearch() {
  document.getElementById("searchoverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("searchoverlay").style.display = "none";
}
</script>
<script>
  $(document).ready(function () {
  //initialize swiper when document ready
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 8,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween:8,
        },
        768: {
          slidesPerView: 3,
          spaceBetween:8,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween:8,
        },
      }
    });
});
</script>
</body>
</html>