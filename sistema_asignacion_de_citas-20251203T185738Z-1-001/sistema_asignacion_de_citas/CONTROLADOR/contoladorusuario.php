<?php

session_start();


include "../MODELO/ModeloUsuario.php";

$i = new usuario ();
if($_SESSION['Rol'] == "Administrador")
{
$instancia =$i-> registrar($_POST);

if($instancia == 1)
{
    include "../VISTAS/formulario.html";

    echo "<p style='background-color:green;color:white;text-align:center;clear:both;'>Registro exitoso</p>";
   
}
else if(str_contains($instancia,"SQLSTATE[23000]"))
{
    include "../VISTAS/formulario.html";

    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>Error en el registro de datos, la cedula no puede duplicarse, este usuario ya existe</p>";
    
}
else if(str_contains($instancia,"SQLSTATE[HY000] [2002]"))
{
    include "../VISTAS/formulario.html";

    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>Error en el registro de datos, el servidor esta fuera de linea, intente más tarde o comuniquese con soporte técnico</p>";
    
}
else
{
    include "../VISTAS/formulario.html";
  
    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>$instancia</p>";
  
}
}
else {
    include "../VISTAS/login.html";
}
?>

