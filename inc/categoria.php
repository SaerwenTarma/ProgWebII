<?php
include_once('redirect.php');

if(isset($_GET['del'])){
    //obtengo el contenido del archivo
    $datos = file_get_contents('categorias.json');
    //convierto a un array
    $datosJson = json_decode($datos,true);
    //var_dump($datosJson);
    //borro del array
    unset($datosJson[$_GET['del']]);
    //trunco el archivo
    $fp = fopen('categorias.json','w');
    //convierto a json string
    $datosString = json_encode($datosJson);
    //guardo el archivo
    fwrite($fp,$datosString);
    fclose($fp);
    redirect('categoria.php');
}
?>

<h2>Categorias </h2>

<a href="categoria_add.php">[ADD]</a>

<table border=1>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>acciones</td>
    </tr>
    <?php
        $datos = file_get_contents('categorias.json');
        $datosJson = json_decode($datos,true);
        //var_dump($datosJson);
        foreach($datosJson as $cat){ ?>
            <tr>
                <td><?php echo $cat['id']?></td>
                <td><?php echo $cat['nombre']?></td>
                <td><a href="categoria_add.php?edit=<?php echo $cat['id']?>">[MOD]</a> - 
                    <a href="categoria.php?del=<?php echo $cat['id']?>">[DEL]</td>
            </tr>
        <?php } ?>
</table>


<?php



?>