<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">
  <div id="page">
    <img src="<?php echo url_for('images/tufted-titmouse.jpg') ?>">
    <h2>Bird Information</h2>
  </div>

  <table>
    <tr>
      <th>Common Name</th>
      <th>Habitat</th>
      <th>Food</th>
      <th>Nest Placement</th>
      <th>Behavior</th>
      <th>Backyard Tips</th>
      <th>Conservation Status</th>
    </tr>

<?php

$parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
$bird_array = $parser->parse();
?>

<?php foreach($bird_array as $args) {
  $bird = new Bird($args); ?>
  <tr>
    <td><?php echo h($bird->common_name); ?></td>
    <td><?php echo h($bird->habitat); ?></td>
    <td><?php echo h($bird->food); ?></td>
    <td><?php echo h($bird->nest_placement); ?></td>
    <td><?php echo h($bird->behavior); ?></td>
    <td><?php echo h($bird->backyard_tips); ?></td>
    <td><?php echo h($bird->conservation_level()); ?></td>
  </tr>
  <?php } ?>

  </table>
</div>



  



