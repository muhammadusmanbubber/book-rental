<?= $this->extend('layouts/HomePage') ?>
<?= $this->section('content') ?>
<?php $this->session = \Config\Services::session(); ?>

<h3 class="text-center text-success p-4">All Books</h3>

<div class="container">
    <div class="row">
        <!-- Show the Successful Book rental message -->
        <?php if ($this->session->getFlashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->getFlashdata('success') ?>
            </div>
        <?php } ?>
            <!-- All Books Card  -->
        <?php foreach ($books as $show) : ?>
            <div class="col-md-4 mb-5">
                <div class="card d-flex align-items-center m-auto bg-light shadow-sm" style="width: 22rem;">
                    <img src="<?= base_url('assets/upload/') . $show['image']; ?>" alt="image" style="height: 350px;width: 300px;margin-top:20px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $show['title']; ?></h5>
                        <a href="<?= base_url('books/book-detail/' . $show['id']) ?>" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>