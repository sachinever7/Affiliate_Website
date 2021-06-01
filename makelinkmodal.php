<?php ob_start(); ?>
<!-- Modal -->
<div class="modal fade" id="makelinkmodal" tabindex="-1" role="dialog" aria-labelledby="makelinkmodalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="makelinkmodalTitle">Congratulations !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
            <i style="color:green;" class="fa fa-check-circle fa-5x" aria-hidden="true"></i><br><br>
          <form class="input-group">
            <input type="text" class="form-control mylink" value="" id="myinput" readonly>
            <div class="input-group-append">
              <div class="btn btn-success appendbtn"><i class="fa fa-link" aria-hidden="true"></i></div>
            </div>
          </form><br>
          <h6>Voilaa! Your link is generated now share it with your friends or purchase product using this link.</h6>
          <h5>Enjoy Earnings...</h5>
            <hr>
            <button class="mybtn btn btn-warning" onclick="cpylink()"><i class="fa fa-link" aria-hidden="true"></i> Copy link</button><hr>
            <a role="button" id="myshare" href="" class="btn btn-success mybtn"><i class="fa fa-whatsapp" aria-hidden="true"></i> Share Now</a><hr>
      </div>
    </div>
  </div>
</div>