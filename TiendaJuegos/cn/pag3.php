<!DOCTYPE html>
<html>
    <head>
            <title>Tienda Juegos</title>
    </head>
    <body>
        <?php
            include("cn.php");
            $sql="select * from juego ORDER BY jue_id ASC LIMIT 10, 5;";
            $resultado=mysqli_query($con,$sql);
        ?>
       <div>
            <a href="agregar.php">Nuevo</a><br>
            <form action="buscar.php"> 
                <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
                <input type="submit" value="Buscar"  ><br>
                
        
            </form>
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
                    <?php while ($filas=mysqli_fetch_assoc($resultado)) {
                           
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
                    
                </tbody>
            <table>
        </div>
    </body>
</html> 
<form> 
&nbsp
<a href="pag2.php"><< Anterior</a>&nbsp
<a href="principal.php">1</a>&nbsp
<a href="pag2.php">2</a>&nbsp
<a href="pag3.php">3</a>&nbsp

        
</form>
