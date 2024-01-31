<?php

  $email = $_POST['email'];
  $password = $_POST['password'];

  if($email != 'admin@admin.com' || $password != '1234') {
    header("location: index.php?error=login_error");
  } else {
    $data['email'] = $email;

    session_start();

    $_SESSION[md5('user_data')] = $data;

    header("location: layout.php?page=list-users");
  }

?>