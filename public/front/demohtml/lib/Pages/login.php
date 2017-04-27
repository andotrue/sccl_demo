<?php

if (strlen($_GET['logout'])) {
  unset($_SESSION['login_id']);
  return;
}

$login_id = $_POST['login_id'];
$login_password = $_POST['login_password'];

if (strlen($login_id) && strlen($login_password)) {
  $login = User::UserWithIdAndPassword($login_id, $login_password);
  if ($login) {
    $_SESSION['login_id'] = $login->id;
  } else {
    unset($_SESSION['login_id']);
  }
} else if (strlen($_SESSION['login_id'])) {
  $login = User::UserWithId($_SESSION['login_id']);
  if (!$login) {
    unset($_SESSION['login_id']);
  }
}

?>