
<?php $categorias=array(
							8 => array('id'=>8,'imagen' => 'product01.png','nombre' => 'Laptops', ),
							9 => array('id'=>9,'imagen' => 'product02.png','nombre' => 'Accesorios'),
							10 => array('id'=>10,'imagen' => 'product04.png','nombre' => 'Tablets'),
							11 => array('id'=>11,'imagen' => 'product07.png','nombre' => 'Smartphones'),							
                            12 => array('id'=>12,'imagen' => 'product09.png','nombre' => 'Camaras')
                           
);
							/*
							$var=json_encode($categorias);
							echo $var.'<br/ >';
				   
						  $datos=json_decode($var,true);
						  echo '<pre>';
						  var_dump($datos);
						  echo '</pre>';
     */
	$json = json_encode($categorias);
	$file = 'categorias.json'; 
	file_put_contents($file, $json);






							?>


