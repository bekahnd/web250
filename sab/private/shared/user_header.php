<?php
  if(!isset($page_title)) { $page_title = 'Bird Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SA Birds - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
  </head>

  <body>
    <header>
      <h1>SA Birds Admin Area</h1>
    </header>

    <nav>
      <ul>
        <?php if($session->is_logged_in()) { ?>
        <li>User: <?php echo $session->username; ?></li>
        <li><a href="<?php echo url_for('/users/index.php'); ?>">Menu</a></li>
        <li><a href="<?php echo url_for('/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </nav>



    <?php echo display_session_message(); ?>
