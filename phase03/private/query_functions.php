<?php

function find_all_salamanders() {
  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY id ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

?>
