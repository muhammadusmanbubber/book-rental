<?= $this->extend('layouts/HomePage') ?>
<?= $this->section('content') ?>
<?php $this->session = \Config\Services::session(); ?>

<h3 class="text-center text-success p-4 fw-bold">Book Details</h3>
<div class="container">
    <div class="row mb-1">
        <!-- Show Message Error -->
        <?php if ($this->session->getflashdata('error')) { ?>
            <div class="alert alert-error" role="alert">
                <?php echo $this->session->getflashdata('error'); ?>
            </div>
        <?php } ?>

        <div class="col-lg-4">
            <img src="<?= base_url('assets/upload/') . $show['image']; ?>" class="card-img-top" alt="Book-image" width="300px">
        </div>
        <div class="col-lg-4" style="margin: auto; width:50%">
            <div class="card-body">
                <h3 class="card-title text-info"><?= $show['title']; ?></h3><br>
                <span class="fw-bold">Auther Name</span>
                <h5 class="card-title text-success"><?= $show['Auther_name']; ?></h5>
                <span class="fw-bold">Book Pages</span>
                <h5 class="card-title text-success"><?= $show['pages']; ?></h5>
                <span class="fw-bold">Publish Date</span>
                <h5 class="card-title text-success"><?= $show['publish_date']; ?></h5>
                <span class="fw-bold">Book Descriptioin</span>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Architecto veritatis possimus distinctio a error odio saepe adipisci vitae?
                    Assumenda velit inventore fuga odit nam eveniet aliquam voluptas sequi,
                    eligendi sint?</p>
                <a href="<?= base_url('books/rent-book/' . $show['id']) ?>" class="btn btn-info">Rent Now</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>