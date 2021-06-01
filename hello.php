<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		flickity
	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="slidernew.css">
	<link rel="stylesheet" href="css1.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
$('.site-main .about-area .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>
  
</head>
<body>
<h1>Owl Carousel - half-width cells</h1>
<div class="container">
  <div class="owl-carousel owl-theme">
    <div class="owl-item ml-2 mr-2" style="background-color: blue;">1</div>
    <div class="item ml-2 mr-2" style="background-color: blue;">2</div>
    <div class="item ml-2 mr-2" style="background-color: blue;">3</div>
    <div class="item ml-2 mr-2" style="background-color: blue;">4</div>
    <div class="item ml-2 mr-2" style="background-color: blue;">5</div>
    <div class="item ml-2 mr-2" style="background-color: blue;">6</div>
  </div>
</div>
<div class="card">
            <span class="card-notify-badge">Flipkart</span>
            <img src="images/cc2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="product_name font-weight-light">Card title</h5>
                <span class="brand font-weight-bold">by Apple</span>
                  <p class="product_desc font-weight-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="d-flex price_data">
                  <p>
                  Price:<span class="price">₹565</span>
                  <s><small class="text-muted">₹700</small></s>
                  </p>
                  <p>
                  Profit:<span class="profit">₹56</span>
                  <small style="color: green;">/order</small>
                  </p>
                  </div>
                  <hr>
                  <div class="buy_share_btn clearfix">
                  <button href="#" class="btn btn-danger float-left"><i class="fa fa-cart-plus"></i> BUY NOW </button>
                  <button href="#" class="btn btn-success float-right"><i class="fa fa-whatsapp"></i> SHARE NOW</button>
                  </div>
                  
              </div>
          </div>

</body>
</html>