<?php require_once('../../private/initialize.php'); $id = $_GET['id'] ?? 1; $pageTitle = 'Salamander Details'; include(SHARED_PATH . '/salamander-header.php'); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SAS</title>
  </head>
  
  <body>

  <?php include('../private/shared/salamander-header.php'); ?>

  <h2>Salamander Details</h2>
  <p>Page ID: <?= h($id) ?></p>
  <p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

  <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
  </body>
</html>
