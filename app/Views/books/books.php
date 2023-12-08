<?= $this->extend('layouts/AdminPage') ?>
<?= $this->section('content') ?>
<?php $this->session = \Config\Services::session(); ?>

<div class="container d-flex align-items-center">
  <div class="row justify-content-center w-100">
    <h3 class="text-center p-3 text-success">All Books</h3>

    <!-- Show Message Error -->
    <?php if ($this->session->getflashdata('success')) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->getflashdata('success'); ?>
      </div>
    <?php } ?>
    <!-- All Books Table -->
    <table class="table table-striped table-hover p-3">
      <tr>
        <th>ID</th>
        <th>Book Title</th>
        <th>Auther Name</th>
        <th>Pages</th>
        <th>Publish Date</th>
        <th>Image</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($infodata as $show) : ?>
        <tr>
          <td><?= $show['id']; ?></td>
          <td><?= $show['title']; ?></td>
          <td><?= $show['Auther_name']; ?></td>
          <td><?= $show['pages']; ?></td>
          <td><?= $show['publish_date']; ?></td>
          <td><img src="<?= base_url('assets/upload/') . $show['image']; ?>" alt="image" style="height: 50px;width: 50px;"></td>
          <td><a href="<?= base_url('books/delete-book/' . $show['id']) ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <!-- Pagination Section  -->
    <section>
      <?php echo $pager->links() ?>
    </section>
  </div>
</div>

<?= $this->endSection() ?>