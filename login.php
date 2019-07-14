<?php 
	include("db/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Curso PHP Avanzado</title>

  <!-- Custom fonts for this template-->
  <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>


<body class="bg-dark">
  <div class="container">
  <?php
  if (ISSET($_SESSION['MESSAGE'])) {
  ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>ERROR DE SESION </strong> <?php ECHO $_SESSION['MESSAGE']; ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
  <?php
    session_destroy();
    }
  ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Iniciar Sesion</div>
      <div class="card-body">
        <form action="db/inicio_sesion.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="usuario" name="txtusuario" class="form-control" required="required" autofocus="autofocus">
              <label for="usuario">Usuario</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="txtpassword" class="form-control" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Ingresar</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/js/jquery.easing.min.js"></script>

</body>

</html>
