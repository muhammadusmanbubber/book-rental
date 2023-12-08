<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>

<div class="container d-flex align-items-center">
  <div class="row justify-content-center w-100">
    <h3 class="text-center p-3 text-success">Rented Books</h3>
    <table class="table table-striped table-hover p-3">
      <tr>
        <th>Main ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Book Title</th>
        <th>Auther Name</th>
        <th>Rental Date</th>
        <th>Return Date</th>
      </tr>
      <?php foreach ($rented_books as $show) : ?>
        <tr>
          <td><?= $show['id']; ?></td>
          <td><?= $show['name']; ?></td>
          <td><?= $show['email']; ?></td>
          <td><?= $show['title']; ?></td>
          <td><?= $show['Auther_name']; ?></td>
          <td><?= $show['rental_date']; ?></td>
          <td><?= $show['return_date']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<?= $this->endSection() ?>