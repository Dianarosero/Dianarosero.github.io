<?php

$conex = mysqli_connect("localhost","root","","registro")or die(mysql_error($mysqli)); 

insertar($conex);

function insertar($conex){
    $name=$_POST['names'];
    $email=$_POST['email'];

    $consulta="INSERT INTO datos(nombre, email) 
    VALUES ('$name','$email')";
    mysqli_query($conex,$consulta);
    mysqli_close($conex);
}
?>