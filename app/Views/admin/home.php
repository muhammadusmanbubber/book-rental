<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>

<h3 class="text-center p-3 text-success">Admin Home Page</h3>

<div class="container-fluid px-4 bg-light">
    <div class="row p-3">

        <!-- User Count Section -->
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm text-center">
                <div class=" ">
                    <h3 class="fs-2"><?= $UserCount ?? 0 ?></php>
                    </h3>
                    <p class="fs-5">Total Users</p>
                </div>
                <i class="fa fa-user" style="font-size: 33px"></i>
            </div>
        </div>

        <!-- Book Count Section -->
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm text-center">
                <div>
                    <h3 class="fs-2"><?= $bookCount ?? 0; ?></h3>
                    <p class="fs-5">Total Books</p>
                </div>
                <i class="fa fa-podcast" style="font-size: 33px"></i>
            </div>
        </div>

        <!-- Rental Book Count Section -->
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm text-center">
                <div>
                    <h3 class="fs-2"><?= $RentedBookCount ?? 0 ?></h3>
                    <p class="fs-5">Rented Books</p>
                </div>
                <i class="fa fa-dollar" style="font-size: 33px"></i>
            </div>
        </div>

        <!-- Return Book Count Section -->
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm text-center">
                <div>
                    <h3 class="fs-2">0</h3>
                    <p class="fs-5">Returned Books</p>
                </div>
                <i class="fa fa-user-secret" style="font-size: 33px"></i>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>