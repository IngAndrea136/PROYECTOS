<?php

 
  include "../MODELO/ModeloUsuario.php"; 
  $instancia= new usuario () ;//instancia de la clase usuario
  $respuesta = $instancia -> actualizar ($_POST); // invoco el metodo y sobrecargo los datos

   if ($respuesta==1)
   { 

      
      echo "Se registraron correctamente los cambios ";
     
   }
   else 
   {
    echo " no se registraron correctamente los cambios ";
     echo $respuesta;
   }

?>