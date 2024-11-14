<?php include "config.php";
include "header.php";
$sql = "SELECT * FROM products LEFT JOIN category ON products.p_category = category.c_id";
$result = mysqli_query($conn, $sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
?>


<div class="container-xl">
    <div class="row my-5">
        <div class="col-6">
            <h2 class="text-secondary m-0">All Post</h2>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="<?= $hostname; ?>/admin/add_post.php" class="btn btn-primary">Add New Post</a>
        </div>
        <div class="col-md-12 mt-2">
            <table class="table table-striped table-secondary table-bordered user-table">
                <thead>
                    <tr class="table-active table-dark">
                        <th>P Id</th>
                        <th>title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Availablity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    foreach($data as $row){ ?>
                    <tr">
                        <td class="fs-6 fs-md-5">SKU_<?= $row['p_id']; ?></td>
                        <td class="fs-6 fs-md-5"><?= $row['p_name']; ?></td>
                        <td class="fs-6 fs-md-5"><?= $row['c_name']; ?></td>
                        <td class="fs-6 fs-md-5"><?= $row['c_price']; ?></td>
                        <td class="fs-6 fs-md-5"><?= $row['p_rating']; ?> <i class="fa-solid fa-star"></i></td>
                        <td class="fs-6 fs-md-5">
                            <?= $row['stock'] > 0 ? $row['stock'] : "Stock Out" ?>
                        </td>
                        <td class="py-1">
                            <img src="product/<?= $row['p_image']; ?>" alt="" height="40px" width="40px" style="object-fit: cover;">
                        </td>
                        <td>
                            <a href="<?= $hostname; ?>/admin/edit_post.php?pid=<?= $row['p_id']; ?>" class="btn btn-primary"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a href="<?= $hostname; ?>/admin/post_action.php?delpost=<?= $row['p_id']; ?>" class="btn btn-danger"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>