<?php
include 'cn.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$id=$_GET['id'];
$sql="select * from juego where jue_id='".$id."'";
$resultado=mysqli_query($con,$sql);
    while ($fila=mysqli_fetch_assoc($resultado)){

?>
<div>
    <form>
            <input type="hidden" name="txtid" value="<?php echo $fila['jue_id']?>">
            <label>Titulo:</label><br>
            <input type="text" name="txttitulo" value="<?php echo $fila['jue_titulo']?>"><br>
            <label>Desarrollador:</label><br>
            <input type="text" name="txtdesarrollador" value="<?php echo $fila['jue_desarrollador']?>"><br>
            <label>Editor:</label><br>
            <input type="text" name="txteditor" value="<?php echo $fila['jue_editor']?>"><br>
            <label>Franquicia:</label><br>
            <input type="text" name="txtfranquicia" value="<?php echo $fila['jue_franquicia']?>"><br>
            <label>Precio:</label><br>
            <input type="float" name="txtprecio" value="<?php echo $fila['jue_precio']?>"><br>
            <input type="submit" name="" value="Actualizar">
            <a href="principal.php">Regresar</a>

    </form>
    <?php } ?>
</div>
<?php
        
        $id=$_GET['txtid'];
        $Titulo=$_GET['txttitulo'];
        $Desarrollador=$_GET['txtdesarrollador'];
        $Editor=$_GET['txteditor'];
        $Franquicia=$_GET['txtfranquicia'];
        $Precio=$_GET['txtprecio'];
        if($id!=null||$Titulo!=null||$Desarrollador!=null||$Editor!=null||$Precio!=null){
            $sql2="update juego set jue_titulo='".$Titulo."',jue_desarrollador='".$Desarrollador."',jue_editor='".$Editor."',jue_franquicia='".$Franquicia."',jue_precio='".$Precio."' where jue_id='".$id."'";
            mysqli_query($con,$sql2);
            if($Titulo=1){
                header("location:principal.php");
            }
        }
?>