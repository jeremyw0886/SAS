<?php 
session_start();

require_once('../../private/initialize.php');

$original_salamanders = [
  ['id' => '1',  'salamanderName' => 'Red-Legged Salamander'],
  ['id' => '2',  'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3',  'salamanderName' => 'ZigZag Salamander'],
  ['id' => '4',  'salamanderName' => 'Slimy Salamander'],
];

// session_unset();

if (!isset($_SESSION['salamanders'])) {
  $_SESSION['salamanders'] = $original_salamanders;
} else {
    foreach ($original_salamanders as $original_salamander) {
      if (!in_array($original_salamander, $_SESSION['salamanders'])) {
        array_unshift($_SESSION['salamanders'], $original_salamander);
    }
  }
}

$salamanders = $_SESSION['salamanders'];

$page_title = 'Salamanders';
include(SHARED_PATH . '/salamander-header.php');

?>

<h1>Salamanders Main Page</h1>

<a href="<?php echo url_for('/salamanders/new.php'); ?>">Create a Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th colspan="3">Action</th>
  </tr>

  <?php foreach ($salamanders as $salamander) { ?>
    <tr>
      <td><?= h($salamander['id']); ?></td>
      <td><?= h($salamander['salamanderName']); ?></td>
      <td><a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
      <td><a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
      <td><a href="">Delete</a></td>
    </tr>
  <?php } ?>
</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
