<?php

include "../MODELO/modelocita.php";
$instancia = new cita();
$respuesta = $instancia -> actualizar($_GET);
if ($respuesta == 1)
{  
    echo "<h1 style ='font-family: Dancing Script, cursive;  text-align: center;  font-size: 60px;'> SE AGENDO SU CITA CORRECTAMENTE  <h1>";

    echo " <button type='button'  style ='   background: #FEFEFE; border-color: #FEFEFE;' ><a href='../VISTAS/consultacita.html' > <img style='width:40px'; src='../VISTAS/IMAGENES/flechacorrecta.png'></a></button> ";
    echo "<img  style ='display:block;margin:auto;' src='../VISTAS/IMAGENES/dien.gif'>";
}
else {
    echo "no se logro agendar su cita, intente de nuevo";
    echo $respuesta;
}
?>