<?php include "config.php";
include "header.php";
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container-fluid">
    <div class="row login-container justify-content-center align-items-center px-2">
        <div class="col-sm-10 col-md-7 col-lg-6 col-xxl-4 py-3 px-3 rounded-3 shadow-lg">
            <div class="logo d-flex justify-content-center">
                <a href="<?= $hostname; ?>/index.php" class=""><img src="img/fashion_forest.png" alt=""
                        class="site_logo rounded-3"></a>
            </div>
            <div class="heading d-flex justify-content-between align-items-center">
                <h2 class="text-dark h4 text-center my-3 fw-bolder">Add New Product</h2>
                <a href="<?= $hostname; ?>/admin/post.php" class="btn btn-success">Back</a>
            </div>
            <form action="<?= $hostname; ?>/admin/post_action.php" class="form" method="POST"
                enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="ptitle" class="form-label fs-5">Product Title</label>
                    <input type="text" class="form-control" placeholder="Enter Product Title" name="ptitle" id="ptitle"
                        required value="<?= $row['p_name']; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="pdesc" class="form-label fs-5">Prouct Description</label>
                    <textarea name="pdesc" id="pdesc" class="form-control"
                        required><?= $row['p_description']; ?></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="oprice" class="form-label fs-5">Old Price</label>
                    <input type="text" class="form-control" placeholder="Enter Old Price if show offer" name="oprice"
                        id="oprice" value="<?= $row['o_price']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="cprice" class="form-label fs-5">Current Price</label>
                    <input type="text" class="form-control" placeholder="Enter Current Price" name="cprice" id="cprice"
                        required value="<?= $row['c_price']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="pcategory" class="form-label fs-5">Category</label>
                    <select name="pcategory" id="pcategory" class="form-select">
                        <?php
                        $query = "SELECT * FROM category";
                        $result1 = mysqli_query($conn, $query);
                        $data = $result1->fetch_all(MYSQLI_ASSOC);
                        foreach ($data as $row1) {
                            ?>
                            <option value="<?= $row1['c_id']; ?>" <?= $row['p_category'] == $row1['c_id'] ? "selected" : ""  ?> ><?= $row1['c_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="quantity" class="form-label fs-5">Available Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" value="<?= $row['stock']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="pimage" class="form-label fs-5">First Name</label>
                    <input type="file" class="form-control" name="pimage[]" id="pimage" multiple">
                    <img src="product/<?= $row['p_image']; ?>" alt="" width="50px">
                </div>
                <div class=" form-group mb-3">
                    <input type="hidden" name="updatePost" value="<?= $row['p_id']; ?>">
                    <input type="hidden" name="old-image" value="<?= $row['p_image']; ?>">
                    <input type="submit" class="btn btn-primary fs-5 py-1 fw-bold w-50" value="Add Product"
                        name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>