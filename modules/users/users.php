<?php include_once 'config.php'; ?>

<?php 

  if(isset($_POST['action'])) {
    if($_POST['action'] == 'create') {
      unset($_POST['action']);

      $handle = fopen('database.users.txt', 'a+');
      fwrite($handle, implode(' - ', $_POST).PHP_EOL);
      fclose($handle);
    } 

    header('location: ../../layout.php?page=list-users');
  } else {
    echo 'Acesso negado';
  }

?>