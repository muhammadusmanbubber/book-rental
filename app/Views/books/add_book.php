<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center" style="min-height:80vh">
    <div class="row justify-content-center w-100">
        <h3 class="text-center p-3 text-success">Add New Book</h3>
        <div class="col-md-6">
            <div class="card text-center p-3 bg-light">
                <!-- Add New Book Form  -->
                <form action="<?= base_url('books/book') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Book Title" name="title" required>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="Auther_name" placeholder="Auther Name" required>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pages" placeholder="pages" required>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="publish_date" required>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="image" required>
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>