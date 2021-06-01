<div class="popular_product bg-light my-5">
<div class="popular_product py-3">
<h2 class="py-4 mt-2 d-flex font-weight-bold justify-content-center"><p class="mx-3"><i class="fa fa-certificate"></i></p>Featured Products</h2>
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php while($row2=$result2->fetch_assoc()){ ?>
        <div class="swiper-slide">
          <div class="card cardmargin">
            <span class="card-notify-badge"><?= $row2['retailer_name']; ?></span>
            <div class="mx-auto my-5 b-block" style="height: 200px;">
            <a href="productdetail.php?pid=<?= $row2['product_id']; ?>"><img class="mx-auto d-block card-img-top" src="<?= $row2['product_main_image']; ?>" class=" product_img card-img-top"></a>
            </div>
              <div class="card-body">
                <span class="brand font-weight-bold"><?= $row2['brand_name']; ?></span>
                <h5 class="product_name font-weight-light"><?= $row2['product_name']; ?></h5>
                  <hr class="cardhr">
                  <div class="text-center">
                  <span class="price">Price:</span>
                  <span class="price_rate">₹<?= $row2['product_selling_price']; ?></span>
                  <s><small class="text-muted cost_price">₹<?= $row2['product_cost_price']; ?></small></s>
                  </div>
                  <div class="text-center">
                  <span class="profit">Profit:</span>
                  <span class="profit_rate">₹<?= $row2['product_profit_price']; ?></span>
                  <small class="perorder">/order</small>
                  </div>
                  <hr class="cardhr">
                  <div class="clearfix">
                  <a href="productdetail.php?pid=<?= $row2['product_id']; ?>" class="btn btn-danger float-left buy_btn"><i class="fa fa-cart-plus"></i> BUY NOW </a>
                  <a href="productdetail.php?pid=<?= $row2['product_id']; ?>" class="btn btn-success float-right share_btn"><i class="fa fa-whatsapp"></i> SHARE NOW</a>
                  </div>
              </div>
          </div>
        </div>
        <?php } ?>

    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>
<div class="my-4 py-3 font-weight-bold text-center"><a href="featuredproduct.php">More Featured Products &#9658;</a></div>
</div>
</div>