
<!DOCTYPE html>
<html lang="en">
	<head>
	<!--  HEAD  -->
		<?php include_once('inc/head.php');  ?>
    </head>
	<body>
		<header>
		<!-- TOP HEADER -->
		 <?php include_once('inc/top_header.php'); ?>

			<!-- MAIN HEADER -->
			<?php  include_once('inc/main_header.php');   ?>
            <!--MENU -->
			<?php  $seccion='index'; ?>
			<?php  include_once('inc/menu.php');   ?>
			  


                         <!--------------------------------------------------------------------------------- -->




            <?php
include_once('inc/redirect.php');

$datoprod=file_get_contents('productos.json');
$datosJsonp=json_decode($datoprod,true);
$datoscom = file_get_contents('comentarios.json');
$datosJsoncom = json_decode($datoscom,true);

    if(isset($_POST['add'])){
            $id = date('Ymdhis');
        

        $datosJsoncom[$id] = array('id'=>$id, 'descripcion'=>$_POST['descripcion']);
       
    
        //trunco el archivo
        $fp = fopen('comentarios.json','w');
        //convierto a json string
        $datosString = json_encode($datosJsoncom);
        //guardo el archivo
        fwrite($fp,$datosString);
        fclose($fp);
        redirect('admin/abm.php');
    }

   
?>


<div class="container p-3 form-gropu">
<?php foreach($datosJsonp as $prod){
    if($prod ['id']== $_GET['id']){ ?>
 <lable><?php echo $prod['nombre'] ?></label></br>
<img src="./img/<?php echo $prod['id']?>/<?php echo $prod['imagen']; ?>" alt="">
<?php }} ?>
<form action="" method="post" enctype="multipart/form-data">
   

    <label> Comentario: </label> </br>
    <textarea  rows="4" cols="50" type="text" name="descripcion" value="<?php echo isset($dato)?$dato['descripcion']:''?>"></textarea></br>
    
    <button type="submit" class="btn btn-danger" name="add"> Aceptar </button>
    <a href="abm.php"> <button type="button" class="btn btn-danger">Cancelar</button></td>
      <p>comentario</p>

    </div>
</form>

                     










					     <!--------------------------------------------------------------------------------- -->
				 
				
				 
		  <!-- SUSCRIPCION -->
               <?php include_once('inc/suscripcion.php');  ?>
				
             <!---FOOTER --->
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
