<?php
  if (isset($_SESSION['emailid'])) {
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="bottomnav fixed-bottom bg-light row w3-hide-small">
<div class="col order-first w3-center w3-border w3-padding ">
  <a href="index.php"><img class="bottom-svg" src="icons/home.svg" alt="Home"><span class="w3-hide-small w3-large">Home</span></a>
  </div>
  <div class="col w3-center w3-border w3-padding">
    <a href="myearning.php"><img class="bottom-svg" src="icons/wallet.svg" alt="My Wallet"><span class="w3-hide-small w3-large">My Wallet</span></a>
  </div>
  <div class="col w3-center w3-border w3-padding">
    <a href="makelink.php"><img class="bottom-svg" src="icons/link.svg" alt="Make Link"><span class="w3-hide-small w3-large">Make Link</span></a>
  </div>
  <div class="col w3-center w3-border w3-padding">
    <a href="history.php"><img class="bottom-svg" src="icons/history.svg" alt="History"><span class="w3-hide-small w3-large">History</span></a>
  </div>
  <div class="col order-last w3-center w3-border w3-padding">
    <a href="my-profile.php"><img class="bottom-svg" src="icons/account.svg" alt="Account"><span class="w3-hide-small w3-large">My Account</span></a> 
  </div>
</nav>
<?php
  }
?>
