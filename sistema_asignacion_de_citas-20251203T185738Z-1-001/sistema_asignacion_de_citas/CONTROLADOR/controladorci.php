<?php

 
  include "../MODELO/modelocita.php"; 
  $instancia= new  cita () ;//instancia de la clase usuario
  $respuesta = $instancia -> registrar ($_POST); // invoco el metodo y sobrecargo los dato
  if($respuesta == 1)
{
    include "../VISTAS/formulariocita (1).html";

    echo "<p style='background-color:green;color:white;text-align:center;clear:both;'>Registro exitoso</p>";
   
}
else if(str_contains($respuesta,"SQLSTATE[23000]"))
{
    include "../VISTAS/formulariocita (1).html";

    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>Error en el registro de datos, la cedula no puede duplicarse, este usuario ya existe</p>";
    
}
else if(str_contains($respuesta,"SQLSTATE[HY000] [2002]"))
{
    include "../VISTAS/formulariocita (1).html";
    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>Error en el registro de datos, el servidor esta fuera de linea, intente más tarde o comuniquese con soporte técnico</p>";
    
}
else
{
    include "../VISTAS/formulariocita (1).html";
  
    echo "<p style='background-color:red;color:white;text-align:center;clear:both;'>$$respuesta</p>";
  
}
  

?>