
<?php
if (isset($_POST['name'])) {
  echo '<p>The name is ' . $_POST['name'];
}
// header('HTTP/1.1 500 Internal Server Error');
header('Content-Type: text/json');
// header('HTTP/1.1 301 Moved Permanently');
// header('Location: https://flaviocopes.com');
// setcookie('name', 'Flavio');


if (isset($_COOKIE['name'])) {
  $name = $_COOKIE['name'];
  echo $name . " - Cookie";
}


if (isset($_POST['name'])) {
  setcookie('name', $_POST['name']);
}
if (isset($_POST['name'])) {
  echo '<p>Hello ' . $_POST['name'];
} else {
  if (isset($_COOKIE['name'])) {
    echo '<p>Hello ' . $_COOKIE['name'];
  }
}

?>