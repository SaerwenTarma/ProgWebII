<?php $marcas=array(
							1 => array('id' => 1,'nombre' => 'Asus'),
							2 => array('id' => 2,'nombre' => 'Philips'),
							3 => array('id' => 3,'nombre' => 'Sony'),
							4 => array('id' => 4,'nombre' => 'Samsung'),									
                            5 => array('id' => 5,'nombre' => 'Dell'),
                            6 => array('id' => 6,'nombre' => 'MSI'),
							7 => array('id' => 7,'nombre' => 'HP'),
							8 => array('id' => 8,'nombre' => 'Rekam')
);

                       /*
							$var=json_encode($marcas);
							echo $var.'<br/ >';
				   
						  $datos=json_decode($var,true);
						  echo '<pre>';
						  var_dump($datos);
						  echo '</pre>';
					   */
					  $json = json_encode($marcas);
					  $file = 'marcas.json'; 
					  file_put_contents($file, $json);









							?>

