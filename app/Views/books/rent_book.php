<?= $this->extend('layouts/HomePage') ?>
<?= $this->section('content') ?>
<?php $this->session = \Config\Services::session(); ?>

<div class="container d-flex align-items-center" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <h3 class="text-center p-3 text-success">Book Renting Form</h3>
        <div class="col-md-6">
            <div class="card p-3 bg-light fw-bold">
                <!-- Show Message Error -->
                <?php
                if (!empty(session()->get('validation'))) {
                    $fieldErrors = session()->get('validation'); ?>
                    <p class="text-danger"><?php echo $fieldErrors->getError('book_id') ?></p>
                <?php } ?>

                <!-- Rent new Book Form  -->
                <form action="<?= base_url('books/book-order') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="user_id" value="<?= session()->get('users')['id'] ?>" required>
                            <input type="hidden" class="form-control" name="book_id" value="<?= $show['id']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row p-2 m-auto">
                        <span>Rental Date</span>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="rental_date" required>
                        </div>
                    </div>
                    <div class="form-group row p-2 m-auto">
                        <span>Return Date</span>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="return_date" required>
                        </div>
                    </div>
                    <div class="form-group row p-2 m-auto">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Rent Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>