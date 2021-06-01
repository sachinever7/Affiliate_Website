
<div class="modal fade" id="checkloginmodal" tabindex="-1" role="dialog" aria-labelledby="checkloginmodalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="checkloginmodalTitle">Please login to continue..!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <i style="color:blue;" class="fa fa-paper-plane-o fa-5x" aria-hidden="true"></i><br><br>
        <h6>It seems you are not logged in.</h6>
        <h5>Please first login and continue your cashback journey with us.Thank you!</h5>
        <hr>
        <a role="button" id="mylogin" href="login.php" class="btn btn-info mybtn"><i class="fa fa-sign-in" aria-hidden="true"></i> Login Now</a>
        <hr>
        <a role="button" id="mysignup" href="signup.php" class="btn btn-warning mybtn"><i class="fa fa-user-plus" aria-hidden="true"></i> Register Now</a>
        <hr>
      </div>
    </div>
  </div>
</div>
<?php 
if(!isset($_SESSION['user_id'])){
    echo "<script>$('#checkloginmodal').modal('show')</script>";
  }
?>