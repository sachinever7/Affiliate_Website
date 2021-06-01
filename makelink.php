<!DOCTYPE html>
<html>
<head>
  <title>Create Link</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/Style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/css1.css">
  <link rel="stylesheet" href="css/makelink.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .makelink_nav__link--active{
    color: #009578;
    }
  </style>
</head>
<body style="background-color: #f7f7f7;">
<?php include 'menu.php'; ?>
<div class="main-page">
<div class="pt-5">
<div class="container-fluid pt-4">
  <div class="row bg-light">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h1 class="text-center m-3 p-3">Paste any Flipkart, Amazon, Myntra, Ajio etc websites URL here to generate your profitable link!</h1>
      <br>
    <form method="post" class="input-group">
      <input type="text" name="userlink" class="form-control makelink" placeholder="Paste your URL here to generate profitable link..">
       <div class="input-group-append">
        <button class="btn btn-info makelinkbtn" data-toggle="tooltip" data-placement="top" title="Create link" type="submit" name="createlink"><i class="fa fa-link fa-2x" aria-hidden="true"></i></button>
       </div>
    </form>
    <br>
    <br>
    <h2 class="text-center">Also share with your friends to earn more..</h2>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <img src="images/cbanner.jpg" style="height: 100%; width: 100%">
  </div>
  </div>
</div>
</div>


<?php include 'makelinkmodal.php'; ?>
<?php include 'working.php';?>
<!--------------------------features of website-------------------------------->
<?php include 'featuresofwebsite.php';?>
</div>
<!----------------------------------- footer ----------------------------------------------------->
<?php include 'footer.php';?>
<?php include 'checkloginmodal.php'; ?>
<?php include 'createlink.php'; ?>

  <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
function cpylink() {
  /* Get the text field */
  var copyText = document.getElementById("myinput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Copied successfully: " + copyText.value);
}
</script>
</body>
</html>