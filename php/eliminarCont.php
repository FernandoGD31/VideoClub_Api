<?php

if (isset($_POST['eliminar'])) {



    if ($_POST['contenido_id']) {

        $contenido_id  = $_POST['contenido_id'];

        $url = "http://31.220.62.39/API/VIDEOCLUB/public/EliminarContenido/{$contenido_id}";

        $json = file_get_contents($url);


       
        header("location: ../eliminarCont.php");
    } else {
        echo '<script type="text/javascript">
        alert("faltan datos");
        window.location.href="eliminarCont.php";
    </script>';
    }
}
