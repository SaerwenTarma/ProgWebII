<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ABM Electro</title>
  </head>
  <body class="bg-secondary">


<?php
include_once('../inc/redirect.php');

if(isset($_GET['del'])){
    //obtengo el contenido del archivo
    $datos = file_get_contents('../productos.json');
    //convierto a un array
    $datosJson = json_decode($datos,true);
    //var_dump($datosJson);
    //borro del array
    unset($datosJson[$_GET['del']]);
    //trunco el archivo
    $fp = fopen('../productos.json','w');
    //convierto a json string
    $datosString = json_encode($datosJson);
    //guardo el archivo
    fwrite($fp,$datosString);
    fclose($fp);
   redirect('abm.php');
}
?>
   



<div class="container p-3 mb-2 bg-ligth text-white" >
<h2> ABM Productos </h2>

<a href="producto_add.php">   <button type="button" class="btn btn-success">Agregar</button> </buttom> </a>

<table class="table bg-light table-striped" border=2>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>acciones</td>
        <td>ID categoria</td>
    </tr>
    <?php
    $datos = file_get_contents('../productos.json');
    //convierto a un array
    $datosJson = json_decode($datos,true);

        foreach($datosJson as $prod) {
            if($prod ['categorias']== $_GET['id']){
            ?>
            <tr>
                <td><?php echo $prod['id']?></td>
                <td><?php echo $prod['nombre']?></td>
                <td><?php echo $prod['precio']?></td>
                <td><a href="producto_add.php?edit=<?php echo $prod['id']?>"> <button type="button" class="btn btn-light">Modificar</button></a> - 
                    <a href="mod-cat.php?del=<?php echo $prod['id']?>"> <button type="button" class="btn btn-danger">Borrar</button></td>
                    <td><?php echo $prod['categorias']?></td>
            </tr>
        <?php } 
    
    
    } ?>
</table>
<a href="abm.php" class="text-danger font-weight-bold" >back</a>
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


