<?php 

$servername = "DEVMASTERDOC\DEVMASTERSQL2016";
$connectioninfo = array("Database"=>"ALMACEN");
//$connectioninfo = array("Database"=>"ALMACEN","UID"=>"usuario","PWD"=> "123456");

$con = sqlsrv_connect($servername,$connectioninfo);

if (!$con) {
	die(print_r(sqlsrv_errors(),true));
}
 ?>