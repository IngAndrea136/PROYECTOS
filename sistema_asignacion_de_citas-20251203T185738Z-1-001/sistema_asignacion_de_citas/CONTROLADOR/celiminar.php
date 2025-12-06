<?php

include "../MODELO/ModeloUsuario.php"; //incluye el archivo modelo
$instancia = new usuario(); //instancia la  clase usuario
$respuesta=$instancia -> eliminar($_GET);// ejucuta el metodo eliminar de la clase usuario
if ($respuesta==1) //si el valor retornado es 1
{  

    echo"se elimino al usuario satisfactorimente";// por medio del constructro echo  muestra la notificacion de eliminacio 
    
}
else// si se devuelve un error desde el mensaje 
 {
    echo "no se elimno ";//se muestra la notificacion no se elimino con el constructor echo
    echo $respuesta;// la variable respuesta contiene la descriocion del error y se  muestra la notificacion con el constructor echo g 
}

?>