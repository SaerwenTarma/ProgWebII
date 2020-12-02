
							




	 	<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

              
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos</h3>

							<!-- SECCION DATOS  productos -->  
							<?php 

/*
include('datos/productos.php');
include('datos/marcas.php');
include('datos/categorias.php');
include('datos/comentarios.php');
$json = json_encode($productos);
$file = 'productos.json'; 
file_put_contents($file, $json);
$json = json_encode($marcas);
$file = 'marcas.json'; 
file_put_contents($file, $json);
$json = json_encode($comentarios);
$file = 'comentarios.json'; 
file_put_contents($file, $json);
$json = json_encode($categorias);
$file = 'categorias.json'; 
file_put_contents($file, $json); 
				*/
							$datoscat = file_get_contents('categorias.json');
							$datosJsonc = json_decode($datoscat,true);
							$datoprod=	file_get_contents('productos.json');
							$datosJsonp=json_decode($datoprod,true);?>
                              
                              <!--            ------------------------------------------------->


							              <!--- NAVEGADOR CATEGORIAS -->
										  <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								    <?php  foreach($datosJsonc as $cat){    ?>
									<li><a href=  "index.php?cat=<?php echo $cat['id'] ?>" ><?php echo $cat ['nombre'] ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
		

 
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">


										<!-- SLIDE DE PRODUCTOS -->
										<?php foreach($datosJsonp as $prod){ 
										if($prod['activo']==true){
                                                  $imprimir=true;
											// if(isset($_GET['cat'])&& $_GET['cat'] !=''(                    
											if(!empty($_GET['cat'])) {   //si no esta vacio el cat= y existe osea dice cat= ej: index.php?cat= 
                                                      if($prod ['categorias']!= $_GET['cat']) {
													   $imprimir=false;
												}
											}  
											if(!empty($_GET['marca'])) {   //si no esta vacio el marca= y existe osea dice marca= ej: index.php?marca= 
                                                      if($prod ['marca']!= $_GET['marca']) {
													   $imprimir=false;
												}
									        }  
											    if($imprimir){	
											
																	?>
															
																
																<div class="product">
																	<div class="product-img">
																	
																		<img src="./img/<?php echo $prod['id'] ?>/<?php echo $prod['imagen']; ?>" alt="">
																	<?php  if($prod['nuevo']==true){              ?>
																		<div class="product-label">
																		<span class="sale">Nuevo</span>
																		<?php if($prod['descuento']==true) { ?>          
																		<span class="new"> <?php echo $prod ['descuento'];  ?> </span>  <?php } ?>



																	</div>  <?php } ?>
																	</div>
																	
																	<div class="product-body">
																
																	<!--	<p class="product-category"><?php echo $prod ['categorias']; ?></p> -->
																		
																		<h3 class="product-name"><a href="detalle.php?id=<?php echo $prod['id'] ?>&cat=<?php echo $prod['categorias'] ?>&marca=<?php echo $prod['marca']; ?>"><?php echo $prod ['nombre']; ?> </a></h3>
																		<h4 class="product-price"><?php echo $prod['precio']; ?> <del class="product-old-price"><?php echo $prod ['precio_anterior'] ?></del></h4>
																		

																		<div class="product-rating">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="product-btns">
																			

																			<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Favoritos</span></button>
																			 <button class="add-to-compare"><a href="comentarios_web.php?id=<?php echo $prod['id']; ?>"><i class="fa fa-exchange"></i><span class="tooltipp">Comentarios</span></a></button>
												
																			<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista Rapida</span></button>
																			
																		

																			
																		</div>
																	</div>
																	<div class="add-to-cart">
																		<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> AGREGAR</button>
																	</div>
																</div> 
									        
											<?php  }}}
                                                      
                                                     
											
											
										
									 ?>

								
                                      <!-- FIN DE SLIDE DE PRODUCTOS -->




										

										

										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


					
					