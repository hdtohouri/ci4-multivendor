<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/toastify.min.css') ?>">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url("auth/test")?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" id="files" multiple>
        <input type="submit" value="Soumettre">
    </form>

<script>   
    <?php $session = service('session');
    if ($session->has('error')): ?>
        var text = "<?= $session->get('error') ?>"
        notifyMe(text, color = "red", duration = 5000, load = false)
    <?php elseif ($session->has('success')): ?>
        var text = "<?= $session->get('success') ?>"
        notifyMe(text, color = "green", duration = 5000, load = false)
    <?php endif; ?>
</script>
</body>
</html>


