<?php include "config.php"; ?>
<?php include "header.php"; ?>

<section class="home bg-dark" id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <h2 class="text-uppercase text-dark">Collection</h2>
        <h1 class="h1">Exclusive <span class="fw-bold">Winter</span></h1>
        <p>
          New Modern Stylish Fashionable Women's Wear holder bag holder.
        </p>

        <div class="shop-Btn">
          <a href="shop.php" class="text-uppercase text-decoration-none text-dark shopBtn px-4 py-2 fs-5">shop now</a>
        </div>
      </div>

      <div class="col-md-6">
        <img src="image/boots.png" alt="" class="animate_img mw-100" />
      </div>
    </div>
  </div>
</section>

<!-- hero section end -->

<!-- features section start -->

<div class="container-lg my-5">
  <h2 class="fw-bold display-6 text-capitalize text-center mb-3 collection-title">
    Our New Collection
  </h2>
  <div class="row collection">
    <div class="col-lg-4 bg-light position-relative big-card overflow-hidden">
      <img src="image/collection img1.png" alt="" />
      <div class="content-right">
        <p class="text-secondary fs-5 text-uppercase">Hot</p>
        <h2 class="text-uppercase fs-4">Women's</h2>
      </div>
    </div>

    <!-- small carts start -->

    <div class="col-lg-4 my-3 my-md-0 small-cards gap-2 d-flex flex-column">
      <div class="small-card bg-light h-50 position-relative overflow-hidden">
        <div class="card-img">
          <img src="image/collection img3.png" alt="" class="img-1 h-100" />
        </div>
        <div class="content-left pt-3">
          <p class="text-secondary fs-5 text-uppercase">collection</p>
          <h2 class="text-dark h-2 text-uppercase">Bags</h2>
        </div>
      </div>
      <div class="small-card bg-light h-50 position-relative overflow-hidden">
        <div class="card-img">
          <img src="image/collection img4.png" alt="" class="img-2 h-100" />
        </div>
        <div class="content-right">
          <p class="text-secondary fs-5 text-uppercase">collection</p>
          <h2 class="text-dark h-2 text-uppercase">Bags</h2>
        </div>
      </div>
    </div>
    <!-- small card section end -->

    <!-- big 2 card -->

    <div class="col-lg-4 bg-light position-relative big-card overflow-hidden">
      <img src="image/collection img2.png" alt="" class="big-img-2" />
      <div class="content-left">
        <p class="text-secondary fs-5 text-uppercase">Hot</p>
        <h2 class="text-uppercase fs-4">Women's</h2>
      </div>
    </div>
  </div>
</div>

<!-- features section end -->

<div class="container">
  <h2 class="text-dark display-6 my-3 text-center fw-bolder">
    Our Top Collection
  </h2>
  <ul class="navbar w-75 top-nav list-unstyled mx-auto">
    <li class="nav-item">
      <a href="#" class="nav-link fs-5 text-secondary top-menu page-active">Featured</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link fs-5 text-secondary top-menu">New</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link fs-5 text-secondary top-menu">Popular</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link fs-5 text-secondary top-menu">Sale</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link fs-5 text-secondary top-menu">Top Rated</a>
    </li>
  </ul>
  <div class="row mb-3">
    <div class="col-sm-6 col-lg-4 col-xl-3">
      <div class="card product-card">
        <div class="card-body p-0 collection-card">
          <a href="#product" class="text-dark">
            <img src="image/product1.png" alt="" class="w-100 position-relative" />
            <p class="px-3 pt-2 fs-3 m-0 fw-bolder">Deary Cream</p>
            <p class="text-secondary px-3 fs-5 fw-bolder text-dark">
              <strike class="fs-6 fw-normal text-secondary">$56.00</strike>
              $40.00
            </p>
          </a>
          <div class="card-icons">
            <a href=""><i class="fa-regular fa-heart"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            <a href=""><i class="fa-regular fa-eye"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>