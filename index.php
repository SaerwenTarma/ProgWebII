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
			  



			<!-- MENU_LATERAL --> 
			<?php include('inc/menu_lateral.php'); ?>
	   		











					  
				  <!-- MENU_PRODUCTOS  -->
				
				 
				
				  <?php   include('inc/menu_productos.php'); ?>
					
           	<!--- SHOP  -->					
			<?php include_once('inc/ofertas.php'); ?>


		<!-- OFERTAS_SEMANALES  -->
        <?php include_once('inc/ofertas_semanales.php');  ?>


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
