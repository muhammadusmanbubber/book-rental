<?= $this->extend('layouts/AuthPage') ?>
<?= $this->section('content') ?>
<?php $this->session = \Config\Services::session(); ?>

<div class="container d-flex align-items-center" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <h3 class="text-center p-3 text-success">Book Rental System</h3>
        <div class="col-md-6">
            <div class="card text-center p-5 bg-light">
                <h4 class="text-info">Login Form</h4>

                <!-- Show Message Error -->
                <?php if ($this->session->getflashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->getflashdata('error'); ?>
                    </div>
                <?php } ?>

                <!-- Show Message SuccessFuly -->
                <?php if ($this->session->getflashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->getflashdata('success'); ?>
                    </div>
                <?php } ?>

                <!-- User Login Form -->
                <form action="<?= base_url('login') ?>" method="POST">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php old('email') ?>">
                            <?php
                            if (isset($validation)) {
                                if ($validation->hasError("email")) {
                            ?>
                                    <span class="error text-danger"><?php echo $validation->getError('email'); ?></span> <br>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <?php
                            if (isset($validation)) {
                                if ($validation->hasError("password")) {
                            ?>
                                    <span class="error text-danger"><?php echo $validation->getError('password'); ?></span> <br>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
                <p class="mt-2 fw-bold">Create new accout: <a href="<?= base_url('signup') ?>"><span class="text-success">Click Here</span></a></p>
                <p class="mt-2 fw-bold">Admin Login <a href="<?= base_url('admin_login') ?>"><span class="text-success">Login Here</span></a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>