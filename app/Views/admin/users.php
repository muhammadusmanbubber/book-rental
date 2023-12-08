<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center">
  <div class="row justify-content-center w-100">
    <h3 class="text-center p-3 text-success">User Profile</h3>
    <table class="table table-striped table-hover p-3">
      <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($total_users as $show) : ?>
        <tr>
          <td><?= $show['id']; ?></td>
          <td><?= $show['name']; ?></td>
          <td><?= $show['email']; ?></td>
          <td><?= $show['password']; ?></td>
          <td><a href="<?= base_url('admin/edit/' . $show['id']) ?>" class="btn btn-warning">Update</a></td>
          <td><a href="<?= base_url('admin/delete/' . $show['id']) ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>

<?= $this->endSection() ?>