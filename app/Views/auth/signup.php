<?= $this->extend('layouts/AuthPage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center mb-5" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <h3 class="text-center p-3 text-success">Book Rental System</h3>
        <div class="col-md-6">
            <div class="card text-center p-3 bg-light">
                <h4 class="text-info">Create New Account</h4>
                <!-- Signup Form  -->
                <form action="<?= base_url('signup') ?>" method="POST">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="User Name" name="name" value="<?= old('name') ?>">
                            <?php
                            if (isset($validation)) {
                                if ($validation->hasError("name")) {
                            ?>
                                    <span class="error text-danger"><?php echo $validation->getError('name'); ?></span> <br>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= old('email') ?>">
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
                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?= old('password') ?>">
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
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" value="<?= old('cpassword') ?>">
                            <?php
                            if (isset($validation)) {
                                if ($validation->hasError("cpassword")) {
                            ?>
                                    <span class="error text-danger"><?php echo $validation->getError('cpassword'); ?></span> <br>
                            <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 fw-bold">User Login: <a href="<?= base_url('/') ?>"><span class="text-success">
                            Login Here</span></a></p>
                <p class="mt-3 fw-bold">Admin Login: <a href="<?= base_url('admin_login') ?>"><span class="text-success">Login Here</span></a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>