<div>
    <form>
            <label>Id:</label><br>
            <input type="text" id="codigo" name="txtid"><br>
            <label>Titulo:</label><br>
            <input type="text" id="titulo" name="txttitulo"><br>
            <label>Desarrollador:</label><br>
            <input type="text" id="desarrollador"name="txtdesarrollador"><br>
            <label>Editor:</label><br>
            <input type="text" id=editor name="txteditor"><br>
            <label>Franquicia:</label><br>
            <input type="text" id=franquicia name="txtfranquicia"><br>
            <label>Precio:</label><br>
            <input type="float" id=precio name="txtprecio"><br>
            <input type="submit" name="agrega" value="Agregar" onclick="return validar()">
            <a href="principal.php">Regresar</a>

    </form>

    <script type="text/javascript" src="JS/validacion.js"></script>
</div>



<?php
    include 'cn.php';
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $Id=$_GET['txtid'];
    $Titulo=$_GET['txttitulo'];
    $Desarrollador=$_GET['txtdesarrollador'];
    $Editor=$_GET['txteditor'];
    $Franquicia=$_GET['txtfranquicia'];
    $Precio=$_GET['txtprecio'];

    if($Id!=null||$Titulo!=null||$Desarrollador!=null||$Editor!=null||$Precio!=null){
        $sql="insert into juego(jue_id,jue_titulo,jue_desarrollador,jue_editor,jue_franquicia,jue_precio) VALUES ('".$Id."','".$Titulo."','".$Desarrollador."','".$Editor."','".$Franquicia."','".$Precio."')";
        mysqli_query($con,$sql);
        if($Titulo=1){
            header("location:principal.php");
        }
    }

?>