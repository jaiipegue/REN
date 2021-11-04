<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/presentacion.css" />
  <title>REN</title>
</head>
<body class="text-center">
      <?php include 'header.php' ?>
      <main role="main" style=" position: absolute;top: 0;width: 100%;">
      <?php include 'header.php' ?>
      <?php include "$content"; ?>
      <!-- FOOTER -->
      <footer class="container">
      </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
</body>
</html>