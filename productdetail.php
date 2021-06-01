<?php
require 'connection.php';
?>
<?php include 'checkloginmodal.php';?>
<?php
if(isset($_GET['pid'])){
    $product_id=$_GET['pid'];

    $query="SELECT * FROM products WHERE product_id=?";
    
    $stmt=$con->prepare($query);
    $stmt->bind_param("i",$product_id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

  $product_cat_id=$row['product_cat_id'];
  $product_name=$row['product_name'];
  $retailer_name=$row['retailer_name'];
  $product_selling_price=$row['product_selling_price'];
  $product_cost_price=$row['product_cost_price'];
  $product_profit_price=$row['product_profit_price'];
  $product_short_desc=$row['product_short_desc'];
  $product_long_desc=$row['product_long_desc'];
  $brand_name=$row['brand_name'];
  $similar_product_1=$row['similar_product_1'];
  $similar_product_2=$row['similar_product_2'];
  $similar_product_3=$row['similar_product_3'];
  $similar_product_4=$row['similar_product_4'];
  $product_features=$row['product_features'];

  $product_main_image=$row['product_main_image'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/css1.css">
  <link rel="stylesheet" href="css/mycard.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/productdetail.css">
</head>
<body>
<?php include 'menu.php';?>
<!-- Page Content -->
<div class="main-page">
<div class="pt-5">
    
<div class="container-fluid pt-5">

  <!-- Portfolio Item Row -->
  <div class="row">
  	       
        <div class="preview col-md-4">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img class="img-fluid" id="mypic" src="<?= $product_main_image; ?>"/></div>
						  <div class="tab-pane" id="pic-2"><img class="img-fluid" id="mypic1" src="admin/<?= $product_image1; ?>" /></div>
						  <div class="tab-pane" id="pic-3"><img class="img-fluid" id="mypic2" src="admin/<?= $product_image2; ?>" /></div>
              <div class="tab-pane" id="pic-4"><img class="img-fluid" id="mypic3" src="admin/<?= $product_image3; ?>" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img class="img-thumbnail" src="<?= $product_main_image; ?>" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img class="img-thumbnail" src="admin/<?= $product_image1; ?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img class="img-thumbnail" src="admin/<?= $product_image2; ?>" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img class="img-thumbnail" src="admin/<?= $product_image3; ?>" /></a></li>
						</ul>
					</div>

    <div class="col-md-8">
      <div class="detail">
        <h3>Project Description</h3>
        <p><?= $product_long_desc; ?></p>
        <?php if(!isset($_SESSION['user_id'])) { ?>
        <button data-toggle="modal" data-target="#checkloginmodal" class="btn btn-danger"><i class="fa fa-cart-plus"></i> BUY NOW</button> | 
          <button data-toggle="modal" data-target="#checkloginmodal" class="btn btn-success"><i class="fa fa-whatsapp"></i> SHARE NOW</button>
        <?php } ?>
        <?php if(isset($_SESSION['user_id'])) { ?>
          <a target="_blank" href="redirectpage.php?pid=<?= $product_id; ?>" class="btn btn-danger"><i class="fa fa-cart-plus"></i> BUY NOW</a> | 
          <a target="_blank" href="redirectpage.php?sharepid=<?= $product_id; ?>" class="btn btn-success"><i class="fa fa-whatsapp"></i> SHARE NOW</a>
          <?php } ?>
          <h3 class="my-3">Project Details</h3>
            <ul class="pl-4">
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
      </div>
    </div>
  </div>
  <!-- /.row -->
  </div>
</div>
<!-- /.container -->
</div>
<!------------------------------------------------------------------------- !related products ------------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="zoomsl.min.js"></script>
  <script>
      function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

      function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
    if($(window).width() >= 720){
    $('#mypic').imagezoomsl();
    $('#mypic1').imagezoomsl();
    $('#mypic2').imagezoomsl();
    $('#mypic3').imagezoomsl();
}
if($(window).width() <= 719){
    $('#mypic').imagezoomsl({
      innerzoom:'true'
    });
    $('#mypic1').imagezoomsl({
      innerzoom:'true'
    });
    $('#mypic2').imagezoomsl({
      innerzoom:'true'
    });
    $('#mypic3').imagezoomsl({
      innerzoom:'true'
    });
}
  </script>
</body>
</html>