<?php include "config.php"; ?>
<?php include "header.php"; ?>
<section class="about" id="about">
  <div class="about-header">
    <h1 class="display-3 fw-bold">About Us</h1>
    <div class="parmalink d-flex align-items-center justify-content-center">
      <a href="#" class="text-dark fs-3 px-2">Home</a>
      <i class="fa-solid fa-circle-arrow-right fs-3"></i>
      <p class="text-secondary fs-3 m-0 px-2">About Us</p>
    </div>
  </div>

  <div class="bg-white">
    <div class="container py-5">
      <div class="row justify-content-between gap-3">
        <div class="col-lg-7">
          <h1 class="text-dark fs-1">Who We Are?</h1>
          <p class="text-secondary fs-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis similique ad voluptas dolore blanditiis suscipit itaque
            rerum. Omnis quia officiis est accusamus, rerum eius culpa
            debitis, veniam earum, ipsam impedit!
          </p>
          <br />
          <p class="text-secondary fs-5">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. A,
            possimus? Dolor molestias deleniti eos non nisi vero nihil
            itaque, quasi repudiandae enim sunt! Sequi porro ullam
            cupiditate, doloribus ea aspernatur.
          </p>
          <p class="text-secondary fs-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Corporis similique ad voluptas dolore blanditiis suscipit itaque
            rerum. Omnis quia officiis est accusamus, rerum eius culpa
            debitis, veniam earum, ipsam impedit!
          </p>
          <a href="#" class="btn btn-outline-dark btn-lg">
            Take a Tour <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

        <div class="col-lg-4 d-flex justify-content-center">
          <img src="image/aboute client.jpg" alt="" class="w-100 rounded-3" />
        </div>
      </div>
    </div>
  </div>

  <!-- why shop from us -->
  <div class="bg-light">
    <div id="shop_us">
      <div class="container py-lg-5 bg-light">
        <h1 class="text-dark display-4 my-5 fw-bolder">Why Shop From Us</h1>
        <div class="row feature_sec gap-3 pb-3 gap-lg-0">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pt-5 feature_card first-card">
                <span class="icon"><i class="fa-solid fa-truck"></i></span>
                <h3 class="text-uppercase text-center mt-3">
                  Free Shipping
                </h3>
                <p class="text-secondary">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nam inventore, atque ipsam ullam nihil eligendi quisquam
                  nulla, tempore at facere voluptatum est voluptates eos
                  laborum fugit asperiores deserunt. Aut, aliquid.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pt-5 feature_card">
                <span class="icon"><i class="fa-solid fa-headphones"></i></span>
                <h3 class="text-uppercase text-center mt-3">
                  24/7 Live Support
                </h3>
                <p class="text-secondary">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nam inventore, atque ipsam ullam nihil eligendi quisquam
                  nulla, tempore at facere voluptatum est voluptates eos
                  laborum fugit asperiores deserunt. Aut, aliquid.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body pt-5 feature_card">
                <span class="icon"><i class="fa-solid fa-thumbs-up"></i></span>
                <h3 class="text-uppercase text-center mt-3">Easy return</h3>
                <p class="text-secondary">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nam inventore, atque ipsam ullam nihil eligendi quisquam
                  nulla, tempore at facere voluptatum est voluptates eos
                  laborum fugit asperiores deserunt. Aut, aliquid.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact">
    <div class="about-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="text-white fw-bold">We Deliver Genuine Product</h2>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Placeat doloremque dolorem esse temporibus laudantium sequi,
              numquam dolores sunt, recusandae id, aliquam libero enim
              aperiam atque omnis consequatur ab rem nam!
            </p>
            <a href="#" class="contact-btn">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php
  $sql = "SELECT * FROM review LEFT JOIN users ON review.a_id = users.uid ORDER BY r_id DESC LIMIT 0, 1";
  $result = mysqli_query($conn, $sql) or die("Query failed");
  $row = $result->fetch_assoc();
  ?>
  <div id="review" class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto d-flex flex-column align-items-center">
          <p class="text-secondary"><?= $row['message']; ?></p>

          <a href="#" class="text-dark text-decoration-none">
            <div class="card px-3 py-2 single-review">
              <div class="d-flex gap-3">
                <div class="user-img">
                  <img src="admin/img/<?= $row['image']; ?>" alt="" class="" width="60px" />
                </div>
                <div class="user d-flex justify-content-center flex-column">
                  <h2 class="fs-4 m-0"><?= $row['fname'] . " " . $row['lname']; ?></h2>
                  <p class="text-secondary m-0">Customer</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>