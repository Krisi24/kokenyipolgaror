<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title> <?= $meta_title.' | '.$page_name ?> </title>
	<link rel="icon" type="image/jpg"  href="<?= base_url(); ?>images/logo.webp" />
	<meta name="author" content="Kristóf Péter Cseh">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>styles/style.css">
  </head>
  <body>
    <?= view('components/menu', [
        'page_name' => $page_name
    ]) ?>

    <div class="main-content">
        <?= $this->renderSection('content'); ?>
    </div>

    <?= view('components/footer') ?>
  </body>
</html>