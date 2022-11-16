<?php
if (isset($_POST['name'])) {
  echo '<p>The name is ' . $_POST['name'];
}
// header('HTTP/1.1 500 Internal Server Error');
header('Content-Type: text/json');
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://flaviocopes.com');
?>