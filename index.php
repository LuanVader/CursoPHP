<?php 
	include("includes/header.php");
	include("db/connect.php");
 ?>

<?php
	if (ISSET($_SESSION['MESSAGE'])) {
?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Usario : <?php ECHO $_SESSION['USUARIO']; ?> </strong> <?php ECHO $_SESSION['MESSAGE']; ?>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
<?php
	session_destroy();
	}
?>


<h1><?php echo $_SESSION['NOMBRE']; ?></h1>

 <?php
 include("includes/footer.php");
 ?>