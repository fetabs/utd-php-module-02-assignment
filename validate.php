<?php

  function validatePages() {
    if (!isset($_GET['page'])) {
      return false;
    }

    switch ($_GET['page']) {
      case "list-users":
        $pageTitle = "Listagem de Usuários";
        $data = file('modules/users/database.users.txt');
        include_once 'modules/users/list.php';
        break;

      case "add-user":
        $pageTitle = "Adição de Usuário";
        $data = file('modules/users/database.users.txt');
        include_once 'modules/users/add.php';
        break;
    }
  }

?>