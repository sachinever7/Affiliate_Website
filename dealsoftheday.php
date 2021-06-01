<div class="popular_product bg-light my-5">
<div class="popular_product py-3">
<h2 class="py-4 mt-2 d-flex font-weight-bold justify-content-center"><p class="mx-3"><i class="fa fa-certificate"></i></p>Deals Of The Day</h2>
<!----------------------------------------------Deals of the day-------------------------------------------------------->
<section class="my-2">
  <div class="container-fluid">
    <div class="row">

      <?php while($row4=$result4->fetch_assoc()){ ?>
      <div class="col-lg-2 col-md-3 col-12">
        <a href="productdetail.php?pid=<?= $row4['product_id']; ?>">
          <div class="card">
            <div class="mx-auto my-5 b-block" style="height: 200px;">
            <img class="mx-auto d-block card-img-top" src="<?= $row4['product_main_image']; ?>" class=" product_img card-img-top">
            </div>
            <div class="over">
              <p class="card-text p-1 text-truncate"><?= $row4['product_name']; ?></p>
            </div>
              <button class="btn btn-info text-white p-2">
              SEE DETAILS
              </button>
          </div>
          </a>
      </div>
      <?php } ?>

     
    </div>
  </div>
</section>
</div>
</div>