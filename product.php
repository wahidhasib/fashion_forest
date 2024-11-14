<?php include "config.php"; ?>
<?php include "header.php"; ?>

<section id="product_page">
  <div class="product_banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 class="product_titile display-4 fw-bold text-center">
            Products
          </h1>
          <p class="fs-4 text-center text-secondary">
            <a href="#" class="text-dark fw-bolder">Home</a>
            <i class="fa-solid fa-arrow-right"></i> Product
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="product_desc">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex gap-2 align-items-center justify-content-center my-5">
          <div class="small-img d-flex flex-column gap-2">
            <div class="p-img img-active"><img src="image/product1.png" alt="" /></div>
            <div class="p-img"><img src="image/product1.png" alt="" /></div>
            <div class="p-img"><img src="image/product1.png" alt="" /></div>
            <div class="p-img"><img src="image/product1.png" alt="" /></div>
          </div>
          <div class="big-img">
            <img src="image/product2.jpg" alt="" />
          </div>
        </div>

        <div class="col-lg-7 d-flex justify-content-center flex-column">
          <h2 class="text-dark fw-bold">Winter Sweater</h2>
          <p class="text-secondary fs-5">
            <strike class="">$ 90.00</strike> <span class="text-dark fs-4 fw-bolder ms-2">$70.00</span>
          </p>
          <div class="p_info">
            <div class="row">
              <div class="col-8">
                <div class="d-flex justify-content-between">
                  <p class="text-seconday">
                    SKU: <span class="text-dark fw-bolder">BN3057</span>
                  </p>
                  <p class="text-secondary">
                    Availabilty: <span class="text-dark fw-bolder">In Stock</span>
                  </p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text-seconday">
                    Category: <span class="text-dark fw-bolder">Men</span>
                  </p>
                  <p class="text-secondary">
                    Tags: <span class="text-dark fw-bolder">Clothing, Winter</span>
                  </p>
                </div>
              </div>
              <div class="col-12 text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Temporibus ipsam omnis incidunt corporis at placeat
                consequatur ducimus sapiente! Quod iure omnis maxime illum
                facere non at unde ab ducimus! Laboriosam?
              </div>
              <div class="size d-flex mt-3 gap-2">
                <div class="py-2 px-3 fs-5 border btn-outline-dark btn active">L</div>
                <div class="py-2 px-3 fs-5 border btn btn-outline-dark">M</div>
                <div class="py-2 px-3 fs-5 border btn btn-outline-dark">S</div>
              </div>

              <div class="col-xxl-9 ">
                <div class="row ps-0 mt-3 order-sec">
                  <div class="col-3 quantity d-flex gap-1 h-100">
                    <div class="qtty fs-3 border border-dark w-50 d-flex align-items-center justify-content-center">1
                    </div>
                    <div class="minus-plus w-50 h-100">
                      <div
                        class="minus border-dark border btn btn-outline-dark fs-1 d-flex align-items-center justify-content-center text-center h-50">
                        -</div>
                      <div
                        class="plus border-dark border btn btn-outline-dark fs-1 d-flex align-items-center justify-content-center text-center h-50">
                        +</div>
                    </div>
                  </div>

                  <div class="col-5">
                    <a href="#"
                      class="add-cart-btn h-100 w-100 text-center d-flex align-items-center justify-content-center fs-4 text-white btn btn-dark text-decoration-none">Add
                      To Cart</a>
                  </div>
                  <div class="col-4 d-flex gap-1">
                    <a href="#"
                      class="add-cart-btn h-100 w-100 text-center d-flex align-items-center justify-content-center fs-4 btn btn-outline-dark text-decoration-none"><i
                        class="fa-regular fa-heart"></i></a>
                    <a href="#"
                      class="add-cart-btn h-100 w-100 text-center d-flex align-items-center justify-content-center fs-4 btn btn-outline-dark text-decoration-none"><i
                        class="fa-regular fa-eye"></i></a>
                    <a href="#"
                      class="add-cart-btn h-100 w-100 text-center d-flex align-items-center justify-content-center fs-4 btn btn-outline-dark text-decoration-none"><i
                        class="fa-solid fa-rotate-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>