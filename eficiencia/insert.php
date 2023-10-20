<?php

    include('conexion.php');
    $con = conection();

    $id = null;
    $Nombre = $_POST['nombre'];
    $Ingrediente = $_POST['ingrediente'];
    

    $sql = "INSERT INTO datos VALUES(null, '$Nombre', '$Ingrediente')";
    $query = mysqli_query($con, $sql);
    if($query){
        /*Header("Location: index.php");*/
    };

?>