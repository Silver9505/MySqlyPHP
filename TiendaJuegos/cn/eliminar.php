<?php
include 'cn.php';
$id=$_GET['id'];
$sql="delete from juego where jue_id='".$id."'";
mysqli_query($con,$sql);
header('location:principal.php');
?>