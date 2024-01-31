<?php include_once 'config.php'; ?>

<?php 

  if(isset($_POST['action'])) {
    if($_POST['action'] == 'create') {
      unset($_POST['action']);

      $handle = fopen('database.users.txt', 'a+');
      fwrite($handle, implode(' - ', $_POST).PHP_EOL);
      fclose($handle);
    } elseif ($_POST['action'] == 'update') {
      $id = $_POST['id'];
      unset($_POST['action'], $_POST['id'], $_POST['password-confirm']);

      $data = file('database.users.txt');
      $data[$id] = implode(' - ', $_POST).PHP_EOL;

      $handle = fopen('database.users.txt', 'w+');
      fwrite($handle, implode('', $data));
      fclose($handle);
    } elseif ($_POST['action'] == 'delete') {
      unset($_POST['action']);

      $data = file('database.users.txt');
      unset($data[$_POST['id']]);

      $handle = fopen('database.users.txt', 'w+');
      fwrite($handle, implode('', $data));
      fclose($handle);
    }

    header('location: ../../layout.php?page=list-users');
  } else {
    echo 'Acesso negado';
  }

?>