<?php

  session_start();

  if (!isset($_SESSION[md5('user_data')])) {
    header("location: index.php?error=forbidden");
  }

  $userData = $_SESSION[md5('user_data')];

?>

<?php include_once 'validate.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Sistema de Usuários</title>

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <?php include_once 'components/top-navbar.php'; ?>
  
  <div id="layoutSidenav">
    <?php include_once 'components/side-navbar.php'; ?>
    
    <div id="layoutSidenav_content">
      <main>
        <?php validatePages(); ?>
      </main>

      <?php include_once 'components/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
  </div>
</body>

</html>