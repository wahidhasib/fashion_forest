<?php include "config.php";
include "header.php"; ?>



<div class="container-xxl my-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="card-title m-0">Wahid Hasib</h2>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Log Out
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure You want to Log Out from your account?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger"><a href="<?= $hostname; ?>/admin/logout.php" class="text-decoration-none text-white">LOG OUT</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>




<?php include "footer.php"; ?>