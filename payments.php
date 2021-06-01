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
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/css1.css">
</head>
<body>
<?php include 'menu.php';
  require 'connection.php';
  if(isset($_SESSION['user_id'])){
    $userid=$_SESSION['user_id'];
    $query2="SELECT * FROM payment WHERE user_id ='$userid'";
    $result2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_assoc($result2);
  }
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
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#bank-details">Bank Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#upi-id">Upi ID</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#update-upi">Update Upi</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div id="bank-details" class="tab-pane active">
                <form>
                <div class="form-group">
                <label>Bank Name</label><br>
                <input type="text" class="form-control" name="bankname" value=<?php echo $row2['bank_name']; ?> readonly><br>
                <label>Branch Name</label><br>
                <input type="text" class="form-control" name="branchname" value=<?php echo $row2['branch_name']; ?> readonly><br>
                <label>Account Holder Name</label><br>
                <input type="text" class="form-control" name="account_holder_name" value=<?php echo $row2['account_holder_name']; ?> readonly><br>
                <label>Account Number</label><br>
                <input type="text" class="form-control" name="accountnumber" value=<?php echo $row2['account_no']; ?> readonly><br>
                <label>IFSC code</label><br>
                <input type="text" class="form-control" name="ifsccode" value=<?php echo $row2['ifsc_code']; ?> readonly><br>
                </div>
              </form>
              </div>

              <div id="upi-id" class="tab-pane fade">
                <form>
                  <div class="form-group">
                  <label>UPI ID</label><br>
                  <input type="text" class="form-control" name="upi" value=<?php echo $row2['upi_id']; ?> readonly><br>
                  </div>
                </form>
              </div>

              <div id="update-upi" class="tab-pane fade">
                <form action="updatebank.php" method="POST">
                  <div class="form-group">
                  <label>Bank Name</label><br>
                  <input type="text" class="form-control" name="bankname" value=""><br>
                  <label>Branch Name</label><br>
                  <input type="text" class="form-control" name="branchname" value=""><br>
                  <label>Account Holder Name</label><br>
                  <input type="text" class="form-control" name="account_holder_name" value=""><br>
                  <label>Account Number</label><br>
                  <input type="text" class="form-control" name="accountnumber" value=""><br>
                  <label>IFSC code</label><br>
                  <input type="text" class="form-control" name="ifsccode" value="">
                  </div>
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
              </div>


            </div>
          </div>
        </div>
    </div>



  </div>
</div>
</div>

<?php include 'footer.php'; ?>
  

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