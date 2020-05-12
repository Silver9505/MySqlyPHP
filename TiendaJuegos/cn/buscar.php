<?php
include 'cn.php';
$buscar=$_GET['busqueda'];
$sql="select * from juego where jue_titulo like '%$buscar%' or jue_desarrollador like '%$buscar%' or jue_editor like '%$buscar%' or jue_franquicia like '%$buscar%' ";
$resultado=mysqli_query($con,$sql);
?>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>DESARROLLADOR</th>
                <th>EDITOR</th>
                <th>FRANQUICIA</th>
                <th>PRECIO</th>
                <th>PRECIO CON DESCUENTO</th>
            </tr>
        <thead>
        <tbody>
            <?php 

            while ($filas=mysqli_fetch_assoc($resultado)) {
                           
            ?>
            <tr>
                <td><?php echo $filas['jue_id']?></td>
                <td><?php echo $filas['jue_titulo']?></td>
                <td><?php echo $filas['jue_desarrollador']?></td>
                <td><?php echo $filas['jue_editor']?></td>
                <td><?php echo $filas['jue_franquicia']?></td>
                <td><?php echo $filas['jue_precio']?></td>
                <td><?php echo $filas['jue_precio_des']?></td0>
                <td>
                    <a href="editar.php?id=<?php echo $filas['jue_id']?>">Editar</a>
                    <a href="eliminar.php?id=<?php echo $filas['jue_id']?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
            <form> <a href="principal.php">Regresar</a> </form>
        </tbody>
    <table>
</div>


