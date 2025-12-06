<?php

include "../MODELO/modelocita.php";
$instancia = new cita();
$respuesta = $instancia -> cancelar($_GET);
if ($respuesta == 1)
{  
    echo "<h1 style ='font-family: Dancing Script, cursive;  text-align: center;  font-size: 60px; '> SE  CANCELA SU CITA  CORRECTAMENTE  <h1>";
    echo " <button type='button'  style ='   background: #FEFEFE; border-color: #FEFEFE;' ><a href='../CONTROLADOR/CCitaAgendada.php' > <img style='width:40px'; src='../VISTAS/IMAGENES/flechacorrecta.png'></a></button> ";
    echo "<img  style ='display:block;margin:auto;' src='../VISTAS/IMAGENES/dien.gif'>";
}
else {
    echo "no se logro cancelar su cita, intente de nuevo";
    echo $respuesta;
}
?>