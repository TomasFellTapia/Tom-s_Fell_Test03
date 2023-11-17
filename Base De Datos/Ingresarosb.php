<?php 
    include("conectar.php");
    $a = $_POST{"imarca"};
    $b = $_POST{"idescripcion"};
    $c = $_POST{"isku"};
    $d = $_POST{"iprecio"};
    $consulta = "Insert into osb marca, descripcion, sku, precio values a,b,c,d; ";
    $resultado = mysqli_query("conexion","consulta");
    
?>