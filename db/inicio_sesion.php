<?php

include("connect.php");

$usuario = $_POST['txtusuario'];
$contraseña = $_POST['txtpassword'];

$query = "SELECT * FROM USUARIOS WHERE vUSUARIO='$usuario' and vCONTRASENA = '$contraseña'";
echo $query."<br />";
$res = sqlsrv_query($con,$query);

if (!$res) {
    die("Query mal!!");
}

$table = sqlsrv_fetch_array($res);

if (!empty($table)) {
    $ID     = $table['iID'];
    $NOMBRE = $table['vNOMBRE'];
    $APELLIDO = $table['vAPELLIDO'];
    $USUARIO = $table['vUSUARIO'];
    $CONTRASENA = $table['vCONTRASENA'];
    $ESTADO = $table['bESTADO'];

    echo $ID."<br />";
    echo $NOMBRE."<br />";
    echo $APELLIDO."<br />";
    echo $USUARIO."<br />";
    echo $CONTRASENA."<br />";
    echo $ESTADO."<br />";

    $_SESSION['ID'] = $ID;
    $_SESSION['NOMBRE']=$NOMBRE.", ".$APELLIDO;
    $_SESSION['USUARIO']= $USUARIO;
    $_SESSION['ESTADO']= $ESTADO;
    $_SESSION['MESSAGE']="Login Correcto";

    IF($_SESSION['ESTADO']==false){
        $_SESSION['MESSAGE'] = "Usuario Inactivo";
        header('location: ../login.php');    
    }ELSE{
        header('location: ../index.php');
    }
    
}else {
    $_SESSION['MESSAGE'] = "Usuario o Contraseña Incorrecto";
    header('location: ../login.php');
}
?>