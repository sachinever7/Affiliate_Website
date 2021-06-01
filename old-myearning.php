<?php
session_start();
  include 'connection.php';
  if(isset($_SESSION['emailid'])){
    $emailid=$_SESSION['emailid'];
    $query1="select * from users where emailid ='$emailid'";
    $query2="select * from payment where emailid ='$emailid'";
    $result1=mysqli_query($con,$query1);
    $result2=mysqli_query($con,$query2);
    $row1=mysqli_fetch_assoc($result1);
    $row2=mysqli_fetch_assoc($result2);
  }
?>
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
  <link rel="stylesheet" href="css1.css">
</head>
<body>
<?php include 'menu.php'; ?>
<h2>My Account</h2>
<div class="container-fluid">
<div class="row px-5 py-2">

  <div class="col-sm-4">
      <div class="nav flex-column nav-pills" aria-orientation="vertical">
      <a class="nav-link active">My Earning</a>
      <a class="nav-link">Payments</a>
      <a class="nav-link">Profile Setting</a>
      <a class="nav-link">History</a>
    </div>
  </div>

  <div class="col-sm-8 px-3">
    <div class="tab-content">
      <div class="tab-pane fade show active">
       <h4 style="background-color: grey; color: white;" class="py-2 px-2">Total Earnings: &#8377;<span><?php echo $row1['total_earning']; ?></span></h4><br>
       <p>Paid Earning: &#8377;<span><?php echo $row1['paid_earning']; ?></span></p>
       <p>Pending Earning: &#8377;<span><?php echo $row1['pending_earning']; ?></span></p>
       <p>Approved Earning: &#8377;<span><?php echo $row1['approved_earning']; ?></span></p><br>
       <h4 style="background-color: lightgreen; color: white;" class="py-2 px-2">Withdrawable Earning: &#8377;<span><?php echo $row1['withdrawable_earning']; ?></span></h4>
       <button type="button" class="btn btn-warning float-left">Redeem</button><i><span  class="float-right">(Minimum redeemable amount is Rs.10)</span></i><br>
      </div><br>

      <div class="tab-pane fade">
         <nav>
          <div class="nav nav-tabs">
            <a class="nav-item ">Bank Details</a>
            <a class="nav-item nav-link">UPI ID</a>
            <a class="nav-item nav-link">Add/Change Bank Details</a>
            <a class="nav-item nav-link">Add/Change UPI ID</a>
          </div>
        </nav>
        <div class="tab-content">
          <div class="tab-pane fade show active">
            <br>
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
          <div class="tab-pane fade show" id="nav-upi" role="tabpanel" aria-labelledby="nav-upi-tab">
            <br>
            <form>
              <div class="form-group">
              <label>UPI ID</label><br>
              <input type="text" class="form-control" name="upi" value=<?php echo $row2['upi_id']; ?> readonly><br>
              </div>
            </form>
          </div>
          <div class="tab-pane fade">
            <br>
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
            <br>
          </div>
          <div class="tab-pane fade">
            <br>
            <form action="updateupi.php">
              <div class="form-group">
              <label>UPI ID</label><br>
              <input type="text" class="form-control" name="upi" value="">
              </div>
              <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            <br>
          </div>
        </div>
      </div>

      <div class="tab-pane fade">
        <nav>
          <div class="nav nav-tabs">
            <a class="nav-item nav-link active">Profile</a>
            <a class="nav-item nav-link">Change Password</a>
          </div>
        </nav>
        <div class="tab-content">
          <div class="tab-pane fade show active">
            <br>
            <form>
              <div class="form-group">
              <label>Username</label><br>
              <input type="text" class="form-control" name="username" value=<?php echo $row1['username']; ?> readonly><br>
              <label>Email Address</label><br>
              <input type="text" class="form-control" name="emailid" value=<?php echo $row1['emailid']; ?> readonly><br>
              <label>Mobile Number</label><br>
              <input type="text" class="form-control" name="mobileno" value=<?php echo $row1['mobileno']; ?> readonly><br>
              </div>
            </form>
          </div>
          <div class="tab-pane fade">
            <br>
            <form action="updatepassword.php">
              <div class="form-group">
              <label>Current Password</label><br>
              <input type="password" class="form-control" name="password" value=""><br>
              <label>New Password</label><br>
              <input type="password" class="form-control" name="newpassword" value=""><br>
              <label>Confirm Password</label><br>
              <input type="password" class="form-control" name="newpassword" value="">
              </div>
              <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            <br>
          </div>
        </div>
      </div>

      <div class="tab-pane fade">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteu</div>
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