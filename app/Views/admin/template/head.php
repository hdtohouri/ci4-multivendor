<head>
    <?php if(isset($title)):  ?>
    <title><?= $title ?></title>
    <?php endif;  ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="StarCode Kh" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">
    <!-- Layout config Js -->
    <script src="<?= base_url('assets/js/layout.js') ?>"></script>
    <script src="<?= base_url('assets/js/toastify.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/notifyMe.js') ?>"></script>
    <!-- Icons CSS -->
    
    <!-- StarCode CSS -->
    

  <link rel="stylesheet" href="<?= base_url('assets/css/starcode2.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/toastify.min.css') ?>">
  <?= $this->renderSection('stylesheet') ?>
</head>