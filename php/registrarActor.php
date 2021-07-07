<?php

if (isset($_POST['registrar'])) {

    if (
        $_POST['nombre'] &&
        $_POST['apellido'] &&
        $_POST['fecha_nac'] &&
        $_POST['sexo']
    ) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac = $_POST['fecha_nac'];
        $sexo = $_POST['sexo'];

        $datos_post = http_build_query(
            array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'fecha_nac' => $fecha_nac,
                'sexo' => $sexo,
               
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
        
        $resultado = file_get_contents('http://31.220.62.39/API/VIDEOCLUB/public/RegistrarActor', false, $contexto);
        
         header("location: ../registrarAct.php");
    }else{
        echo '<script type="text/javascript">
                alert("faltan datos");
                window.location.href="../registrarActor.php";
            </script>';

    }
}
