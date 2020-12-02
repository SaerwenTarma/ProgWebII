

		          
						<div class="col-md-2"> 
							<h3 class="text-center">Categorias</h3>
							<?php include('datos/categorias.php'); ?>
							<ul class="text-center">  
							
							<?php 
							
							$datoscat = file_get_contents('categorias.json');
							$datosJsonc = json_decode($datoscat,true);
                            foreach($datosJsonc as $cat) { ?>
									<li class=""><a  href=  "index.php?cat=<?php echo $cat['id'] ?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>"> <?php echo $cat ['nombre']?></a></li>
								<?php  }?>
                                 <li><a href="index.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">Todas </a></li>
								 
							</ul>
							
							<h3 class="text-center">Marcas</h3>
							<ul class="text-center">  
							
							<?php 
							$datosmar=	file_get_contents('marcas.json');
							$datosJsonm=json_decode($datosmar,true);
                            foreach($datosJsonm as $mar) { ?>
									<li class=""><a  href= "index.php?marca=<?php echo $mar['id'] ?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><?php echo $mar ['nombre'] ?></a></li>
								<?php  }?>
                                 <li><a href="index.php?marca=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>" > Todas </a></li>
								 
							</ul>
					</div> 

					

					