<!DOCTYPE html>
<html lang="en">
	<head>
	<!--  HEAD  -->
		<?php include_once('inc/head.php');  ?>
    </head>
	<body>
		<header>
        <?php include_once('inc/top_header.php'); ?>
        <?php  include_once('inc/main_header.php');   ?>
        
		<?php  include_once('inc/menu.php');   ?>
			  
<div class="container">
<h1>Detalle del producto</h1>
<?php
$datoprod=file_get_contents('productos.json');
$datosJsonp=json_decode($datoprod,true);

if(isset($_GET['id'])){
    if(isset($_GET['cat'])){
   $datocat=file_get_contents('categorias.json');
   $datosJsonc=json_decode($datocat,true);
   $datoc = $datosJsonc[$_GET['cat']];
    if(isset($_GET['marca'])){
        $datomar=file_get_contents('marcas.json');
        $datosJsonm=json_decode($datomar,true);
        $datom = $datosJsonm[$_GET['marca']];
         }
         

    foreach($datosJsonp as $prod){
    if($prod ['id']== $_GET['id']){ ?>
 
   <th><img src="./img/<?php echo $prod['id']?>/<?php echo $prod['imagen']; ?>" alt=""></th>
    
    <div class="add-to-cart">
    
    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> AGREGAR</button>
	</div>
    <table class="table">
    <thead>
      <tr>
    
       <th>Nombre</th>
       <th>Descripcion</th>
       <th>Categoria</th>
       <th>Precio</th>
       <th>Marca</th>
      </tr>
    </thead>
    <thead>
    <tr>
        
        <th><?php echo $prod ['nombre'];?></th>
        <th><?php echo $prod ['descripcion']; ?></th>
        <th><?php echo $datoc ['nombre'];?></th> 
        <th>$<?php echo $prod ['precio']; ?></th>
        <th><?php echo $datom ['nombre']; ?></th>
        <th><?php echo $prod ['comentario']; ?></th>
        </tr>
        </thead>
        
<?php

}}}}else { echo "Nada"; }

    ?> 
    
             </table>
    </div>
    <div class="container">
  
    <a class="btn btn-primary" href="comentario.php?id=<?php echo $_GET['id']; ?>" role="button">Agregar comentario</a>
    </div>
    <?php include_once('inc/ofertas.php'); ?>
    <?php include_once('inc/ofertas_semanales.php');  ?>
    <?php include_once('inc/suscripcion.php');  ?>
    <?php include_once('inc/footer.php');  ?>

    		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
