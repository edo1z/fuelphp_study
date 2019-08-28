<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $title?></title>
    <?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
<?= $header?>
<div class="container">
  <?= $content?>
</div>
<?= $footer?>
</body>
</html>
