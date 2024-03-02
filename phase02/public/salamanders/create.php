<?php
session_start();

require_once('../../private/initialize.php');

if(is_post_request()) {

  $name = $_POST['name'] ?? '';

  $id = count($_SESSION['salamanders']) + 1;

  $_SESSION['salamanders'][] = ['id' => $id, 'salamanderName' => $name];

  redirect_to(url_for('salamanders/index.php'));
}else {
  redirect_to(url_for('salamanders/new.php'));
}
