<?= $this->extend('layouts/HomePage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center">
  <div class="row justify-content-center w-100">
    <h3 class="text-center p-3 text-success">User Profile</h3>
    <!-- User Profile Table  -->
    <table class="table table-striped table-hover p-3">
      <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
      </tr>
      <tr>
        <td><?= $id; ?></td>
        <td><?= $name; ?></td>
        <td><?= $email; ?></td>
        <td><?= $password; ?></td>
        <td><a href="<?= base_url('user/edit/' . $id) ?>" class="btn btn-warning">Update</a></td>
      </tr>
    </table>
  </div>
</div>

<?= $this->endSection() ?>