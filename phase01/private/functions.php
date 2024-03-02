<?php
 function urlfor($script_path) {
  if ($script_path[0] != '/') { 
    $script_path = "/" . $script_path; }
  return WWW_ROOT . $script_path;
}

function u($string="") { 
  return urlencode($string); 
}

function rawU($string="") { 
  return rawurlencode($string); 
}

function h($string="") { 
  return htmlspecialchars($string); 
}
?>
