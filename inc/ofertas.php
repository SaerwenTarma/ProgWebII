	<!-- SECTION -->
    <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

				



					<!-- shop -->
					<?php include('datos/ofertas.php') ?>
					<?php foreach($ofertas as $o){ ?>
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/<?php echo $o['imagen']; ?>" alt="">
							</div>
							<div class="shop-body">
								<h3><?php echo $o['nombre']; ?></h3>
								<a href="#" class="cta-btn">Compre Ya!! <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>  <?php }?>
					<!-- /shop -->
			       

			
				</div>
                			<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
           