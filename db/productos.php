<?php 

function getProductos(){
	include("connect.php");//CREO $CON
	$query="SELECT * FROM PRODUCTOS";

	$res = sqlsrv_query($con,$query);

	if (!$res) {
		die("Query mal!!");
	}

	$lista = array();

	while ( $fila = sqlsrv_fetch_array($res) ) {
		array_push($lista, 
			array(
				"id" 	=> $fila['iID'],
				"nombre"=> $fila['vNOMPROD'],
				"categoria"=>$fila['vCATEGO'],
				"descrip"=>$fila['vDESCRIP'],
				"precio"=> $fila['mPRECIO'],
				"stock" => $fila['iSTOCK']
			)
		);
	}
	return $lista;
}

function getProducto($id){
	include("connect.php");//CREO $CON
	$query="SELECT * FROM PRODUCTOS WHERE iID = $id";

	$res = sqlsrv_query($con,$query);

	if (!$res) {
		die("Query mal!!");
	}

	$lista = array();

	while ( $fila = sqlsrv_fetch_array($res) ) {
		array_push($lista, 
			array(
				"id" 	=> $fila['iID'],
				"nombre"=> $fila['vNOMPROD'],
				"categoria"=>$fila['vCATEGO'],
				"descrip"=>$fila['vDESCRIP'],
				"precio"=> $fila['mPRECIO'],
				"stock" => $fila['iSTOCK']
			)
		);
	}
	return $lista;
}

if (isset($_GET['accion'])) {
	if ($_GET['accion']==1) {
		if (deleteProducto($_GET['id'])) {
			header('location:../page_productos.php');
		}
	}
	if ($_GET['accion']==2) {
		echo $_GET['accion'];
		$array['nombre'] = $_POST['nomProducto'];
		$array['categoria'] = $_POST['categoria'];
		$array['descrip'] = $_POST['descrip'];
		$array['precio'] = $_POST['precio'];
		$array['stock'] = $_POST['stock'];
		
		if (insertProducto($array)){
			header('location:../page_productos.php');	
		}	
	}
	if ($_GET['accion']==3) {
		$array['id'] 		= $_GET['id'];
		$array['nombre'] 	= $_POST['nomProducto'];
		$array['categoria'] = $_POST['categoria'];
		$array['descrip'] 	= $_POST['descrip'];
		$array['precio'] 	= $_POST['precio'];
		$array['stock'] 	= $_POST['stock'];

		if (updateProducto($array)){
			header('location:../page_productos.php');	
		}	
	}
}

function deleteProducto($id){
	include("connect.php");
	$query = "DELETE PRODUCTOS WHERE iId=$id";

	$res = sqlsrv_query($con,$query);

	if (!$res) {
		die("Query mal");
	}

	return true;

}

function insertProducto($array){
	include("connect.php");
	$query = "INSERT INTO PRODUCTOS (
	vNOMPROD,vCATEGO,vDESCRIP,mPRECIO,iSTOCK)
	VALUES ('".$array['nombre']."','".$array['categoria']."','".$array['descrip']."',".$array['precio'].",".$array['stock'].")";

	$res = sqlsrv_query($con,$query);

	if (!$res) {
		die("query mal!!");
	}

	return true;
}

function updateProducto($array){
	include("connect.php");
	
	$query = "UPDATE PRODUCTOS 
		      SET  vNOMPROD = '".$array['nombre']."'
				  ,vCATEGO	= '".$array['categoria']."'
				  ,vDESCRIP = '".$array['descrip']."'
				  ,mPRECIO	= ".$array['precio']."
				  ,iSTOCK	= ".$array['stock']."
			  WHERE iID = ".$array['id'];


	$res = sqlsrv_query($con,$query);

	if (!$res) {
		die("query mal!!");
	}

	return true;
}

?>