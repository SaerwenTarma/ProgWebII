<?php
include 'funcs.php';
$id = $_GET['id']; 
if(isset($_FILES['imagen'])){
	$tamanhos = array(0 => array('nombre'=>'big','ancho'=>'5000','alto'=>'10000'),
					  1 => array('nombre'=>'small','ancho'=>'500','alto'=>'1000'),
					  2 => array('nombre'=>'thumb','ancho'=>'50','alto'=>'50'));
	$ruta = 'imagenes/'.$id.'/'; }


	if(!is_dir($ruta))
		mkdir($ruta);			  
	
	redimensionar($ruta,$_FILES['imagen']['name'],$_FILES['imagen']['tmp_name'],0,$tamanhos);

?>

<form method="post" enctype="multipart/form-data">
	<input type="id" name="">
	<input type="file" name="imagen">
	<input type="submit">
</form>



<?php



?>