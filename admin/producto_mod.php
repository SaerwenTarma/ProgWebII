<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ABM</title>
</head>
<body class="container">
<h1>ABM</h1>
<?php
include_once('../inc/redirect.php');

$datos = file_get_contents('../productos.json');
$datosJson = json_decode($datos,true);
$datocat=file_get_contents('../categorias.json');
$datosJsonc=json_decode($datocat,true);

    if(isset($_POST['add'])){
        
    
        if(isset($_GET['edit'])){
            //modificando
            $id = $_GET['edit'];
            $idc=$_GET['cat'];
        }else{
            //agrego 
            $id = date('Ymdhis');
            mkdir('../img/'.$id);
            $idc = date('Ymdhis');
       
        }
       

       
        
        
        include '../funcs.php';
        if(isset($_FILES['imagen'])){
            $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'5000','alto'=>'10000'),
                              1 => array('nombre'=>'small','ancho'=>'500','alto'=>'1000'),
                              2 => array('nombre'=>'thumb','ancho'=>'50','alto'=>'50'));
            $ruta = '../img/'.$id.'/'; 
        
        
            if(!is_dir($ruta))
                mkdir($ruta);			  
            
            redimensionar($ruta,$_FILES['imagen']['name'],$_FILES['imagen']['tmp_name'],0,$tamanhos);
            $datosJson[$id] = array('id'=>$id, 'nombre'=>$_POST['nombre'],'categorias'=>$_POST['categorias'],'marca'=>$_POST['marca'],'precio'=>$_POST['precio'],'precio_anterior'=>$_POST['precio_anterior'],'descripcion'=>$_POST['descripcion'],'descuento'=>$_POST['descuento'],'activo'=>$_POST['activo']=="yes",'nuevo'=>$_POST['nuevo']=="yes",'imagenthum'=>'img_0_thumb.jpg','imagen'=>'img_0_small.jpg');
            $datosJsonc[$idc]=array('id'=>$idc,'imagen'=>null,'nombre'=>$_POST['categorias']);
        }
         
        //trunco el archivo
        $fp = fopen('../productos.json','w');
        $fpc = fopen('../categorias.json','w');
        //convierto a json string
        $datosString = json_encode($datosJson);
        $datosStringc = json_encode($datosJsonc);
        //guardo el archivo
        fwrite($fp,$datosString);
        fwrite($fpc,$datosStringc);
        fclose($fp);
        fclose($fpc);
        redirect('abm.php');
        
    }

    if(isset($_GET['edit'])){
        $dato = $datosJson[$_GET['edit']];
        $datoc = $datosJsonc[$_GET['cat']];
    }
?>
<div class="bg-light p-5"> 



<form action="" method="post" enctype="multipart/form-data">



<div class="form-gropu from-inline">
    <label> Nombre: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="nombre" value="<?php echo isset($dato)?$dato['nombre']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> Categoria: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="categorias" value="<?php echo isset($datoc)?$datoc['nombre']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> Marca: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="marca" value="<?php echo isset($dato)?$dato['marca']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> Precio: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="precio" value="<?php echo isset($dato)?$dato['precio']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> Precio anterior: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="precio_anterior" value="<?php echo isset($dato)?$dato['precio_anterior']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> descuento: </label> 
    <input class="form-control mb-2 mr-sm-2" type="text" name="descuento" value="<?php echo isset($dato)?$dato['descuento']:''?>"><br />
    </div>
    <div class="form-gropu">
    <label> Descripcion: </label></br>
    <input class="form-control mb-2 mr-sm-2" typte="text" name="descripcion" value="<?php echo isset($dato)?$dato['descripcion']:''?>">
    </textarea></br>
    </div>
    <div class="form-gropu">
    <label> Activo: </label> 
    <input type="checkbox" name="activo" value="yes"><br />
    </div>
    <div class="form-gropu">
    <label> Nuevo: </label> 
    <input type="checkbox" name="nuevo" value="yes"><br />
    </div>
    
    <div class="form-gropu">
    <label> Imagen: </label> </br>
    <input type="file" name="imagen" value="<?php echo isset($dato)?$dato['imagen']:''?>"><br />
    </div>
    <button type="submit" class="btn btn-danger" name="add"> Aceptar </button>
    <a href="abm.php"> <button type="button" class="btn btn-danger">Cancelar</button></td>
      
   
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
</body>
</html>
	
