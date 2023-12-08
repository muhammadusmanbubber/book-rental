<!DOCTYPE html>
<html lang="en">
<!-- Head Tag -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BRS Page</title>
  <link rel="shortcut icon" href="<?= base_url('assets/images/icons.png') ?>" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer class="p-3 bg-light">
    <div class="text-center">
      <small">
        &copy; Book Rental System 2023. All rights reserved.
        </small>
    </div>
  </footer>
</body>

</html>