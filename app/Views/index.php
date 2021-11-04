<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/index.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/presentacion.css" />
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAFIXeHjvo4C-JOS213FZVNukSgTfEUsgc"></script>
    <title>Index</title>
</head>
<body class="text-center">


  <div class="d-flex" id="wrapper">
    <!-- Page Content -->
    <div style=" position: absolute;top: 0;width: 100%;" id="page-content-wrapper">
        <?php include 'header.php' ?>
        <div class="container">
          <?php include "$content"; ?>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
    <script src="<?= base_url()?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/chart.js"></script>
    <script src="<?= base_url()?>/assets/js/map.js"></script>
</body>
</html>

