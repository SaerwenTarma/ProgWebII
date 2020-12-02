<?php $comentarios=array(
                            1 => array('id'=>1,'descripcion' => 'Comentario1'),
                            2 => array('id'=>2,'descripcion' => 'Comentario2'),
                            3 => array('id'=>3,'descripcion' => 'Comentario3'),
                            4 => array('id'=>4,'descripcion' => 'Comentario4' ),
                            5 => array('id'=>5,'descripcion' => 'Comentario5' ),
                            6 => array('id'=>6,'descripcion' => 'Comentario5' ),
                            7 => array('id'=>7,'descripcion' => 'Comentario5' ),
                            8 => array('id'=>8,'descripcion' => 'Comentario5' ),
                            9 => array('id'=>9,'descripcion' => 'Comentario5' ),
                            10 => array('id'=>10,'descripcion' => 'Comentario5' )
							
                           
);
                    


$json = json_encode($comentarios);
$file = 'comentarios.json'; 
file_put_contents($file, $json);
?>