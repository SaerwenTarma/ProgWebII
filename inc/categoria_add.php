<?php
include_once('funcs.php');

//obtengo el contenido del archivo
$datos = file_get_contents('categorias.json');
//convierto a un array
$datosJson = json_decode($datos,true);

    if(isset($_POST['add'])){
        
    
        if(isset($_GET['edit'])){
            //modificando
            $id = $_GET['edit'];
        }else{
            //agrego 
            $id = date('Ymdhis');
        }

        $datosJson[$id] = array('id'=>$id, 'nombre'=>$_POST['nombre']);
    
        //trunco el archivo
        $fp = fopen('categorias.json','w');
        //convierto a json string
        $datosString = json_encode($datosJson);
        //guardo el archivo
        fwrite($fp,$datosString);
        fclose($fp);
        redirect('categoria.php');
    }

    if(isset($_GET['edit'])){
        $dato = $datosJson[$_GET['edit']];
    }
?>


<form action="" method="post">
    Nombre:<input type="text" name="nombre" value="<?php echo isset($dato)?$dato['nombre']:''?>"><br />
    <input type="submit" name="add">
</form>
