<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<?php require_once(APPPATH . 'Views/admin/template/head.php')?>

<body class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">

  <?= $this->renderSection('content') ?>

<?php require_once(APPPATH . 'Views/admin/template/head.php')?>

</body>

</html>