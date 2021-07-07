<?php

if (isset($_POST['eliminar'])) {



    if ($_POST['actor_id']) {

        $actor_id  = $_POST['actor_id'];

        $url = "http://31.220.62.39/API/VIDEOCLUB/public/EliminarActor/{$actor_id}";

        $json = file_get_contents($url);


       
        header("location: ../mostrarAct.php");
    } else {
        echo '<script type="text/javascript">
        alert("faltan datos");
        window.location.href="../eliminarAct.php";
    </script>';
    }
}
