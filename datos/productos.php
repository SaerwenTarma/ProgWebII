<?php $productos=array(
							1 => array('id' =>1,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 8,'marca' => 7,'nombre' => 'nombre1','precio' => '980.000','precio_anterior' => '105.000', 'descuento' =>'-30%', 'activo'=> true, 'nuevo' => true,'descripcion'=>'detalle1'),
							2 => array('id' =>2,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 9,'marca' => 2,'nombre' => 'nombre2','precio' => '60.000','precio_anterior' => '75.000.000','descuento'=>'-10%','activo'=> true,'nuevo' => true,'descripcion'=>'detalle2'),
							3 => array('id' =>3,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 8,'marca' => 4,'nombre' => 'nombre3','precio' => '44.000','precio_anterior' => '50.000','descuento'=>'-50%','activo'=> false,'nuevo' => true, 'descripcion'=>'detalle3'),
							4 => array('id' =>4,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 10,'marca' =>3,'nombre' => 'nombre4','precio' => '20.000','precio_anterior' => '450.000','descuento'=>'-5%','activo'=> true,'nuevo' => false,'descripcion'=>'detalle4'),
							5 => array('id' =>5,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 9,'marca' => 3 ,'nombre' => 'nombre5','precio' => '80.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => true,'descripcion'=>'detalle5'),
							6 => array('id' =>6,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 8,'marca' => 6 ,'nombre' => 'nombre6','precio' => '34.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => false,'descripcion'=>'detalle6'),
							7 => array('id' =>7,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 11,'marca' => 4,'nombre' => 'nombre7','precio' => '16.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => true,'descripcion'=>'detalle7'),
							8 => array('id' =>8,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 8,'marca' =>  1,'nombre' => 'nombre8','precio' => '22.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => true,'descripcion'=>'detalle8'),							
							9 => array('id' =>9,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 12,'marca' => 8,'nombre' => 'nombre9','precio' => '87.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => true,'descripcion'=>'detalle9'),
							10 => array('id' =>10,'imagen' => 'img_0_small.png','imagenthum'=>'img_0_thumb.png','categorias' => 11,'marca' => 4,'nombre' => 'nombre10','precio' => '88.000','precio_anterior' => '89.000','descuento'=>'-25%','activo'=> true,'nuevo' => false,'descripcion'=>'detalle10')
                        );
                          
  /*
                             $var=json_encode($productos);
                                 echo $var.'<br/ >';
								 					
							   $datos=json_decode($var,true);
							   echo '<pre>';
							   var_dump($datos);
							   echo '</pre>';
							
  */

  $json = json_encode($productos);
  $file = 'productos.json'; 
  file_put_contents($file, $json);

							?>