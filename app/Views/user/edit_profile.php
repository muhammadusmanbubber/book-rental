<?= $this->extend('layouts/HomePage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <h3 class="text-center p-3 text-success">Update Profile</h3>
        <div class="col-md-6">
            <div class="card text-center p-3 bg-light">
            <!-- Edit User Profile  -->
                <form action="<?= base_url('user/update/' . $shows['id']) ?>" method="POST">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="User Name" name="name" value="<?= $shows['name'] ?>">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $shows['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="password" placeholder="Password" value="<?= $shows['password'] ?>">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cpassword" placeholder="Confirm Password" value="<?= $shows['cpassword'] ?>">
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