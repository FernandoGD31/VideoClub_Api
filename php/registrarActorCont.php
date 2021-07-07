<?php

if (isset($_POST['registrar'])) {

    if (
        $_POST['actor_id'] &&
        $_POST['contenido_id']
    ) {

        $actor_id = $_POST['actor_id'];
        $contenido_id = $_POST['contenido_id'];

        $datos_post = http_build_query(
            array(
                'actor_id' => $actor_id,
                'contenido_id' => $contenido_id,
               
            )
        );
        
        $opciones = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $datos_post
            )
        );
        
        $contexto = stream_context_create($opciones);
        
        $resultado = file_get_contents('http://31.220.62.39/API/VIDEOCLUB/public/RegistrarActorContenido', false, $contexto);
        
         header("location: ../index.php");
    }else{
        echo '<script type="text/javascript">
                alert("faltan datos");
                window.location.href="../registrarActorCont.php";
            </script>';

    }
}
