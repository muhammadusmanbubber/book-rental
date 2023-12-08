<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card text-center p-3 bg-light">
                <h4 class="text-info">Update User Profile</h4>
                    <!-- Update User Profile Form  -->
                <form action="<?= base_url('admin/update/' . $shows['id']) ?>" method="POST">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="User Name" name="name" value="<?= $shows['name'] ?>">
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
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $shows['email'] ?>">
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
                            <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $shows['password'] ?>">
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
                            <input type="text" class="form-control" name="cpassword" placeholder="Confirm Password" value="<?= $shows['cpassword'] ?>">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>