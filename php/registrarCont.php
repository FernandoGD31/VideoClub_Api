<?php

if (isset($_POST['registrar'])) {

    if (
        $_POST['nombre'] &&
        $_POST['genero'] &&
        $_POST['clasificacion'] &&
        $_POST['calificacion'] &&
        $_POST['fecha_estreno'] &&
        $_POST['sinopsis'] &&
        $_POST['idioma'] &&
        $_POST['duracion'] &&
        $_POST['director_id']
    ) {

        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $clasificacion = $_POST['clasificacion'];
        $calificacion = $_POST['calificacion'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $sinopsis = $_POST['sinopsis'];
        $idioma = $_POST['idioma'];
        $duracion = $_POST['duracion'];
        $director_id = $_POST['director_id'];

        if ($_POST['temporadas'] && $_POST['capitulos']) {
            $temporadas = $_POST['temporadas'];
            $capitulos = $_POST['capitulos'];
            
        } else {
            $temporadas = "NULL";
            $capitulos = "NULL";
        }

        $datos_post = http_build_query(
            array(
                'nombre' => $nombre,
                'genero' => $genero,
                'clasificacion' => $clasificacion,
                'sinopsis' => $sinopsis,
                'idioma' => $idioma,
                'duracion' => $duracion,
                'calificacion' => $calificacion,
                'fecha_estreno' => $fecha_estreno,
                'temporadas' => $temporadas,
                'capitulos' => $capitulos,
                'id_director' => $director_id,
               
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
        
        $resultado = file_get_contents('http://31.220.62.39/API/VIDEOCLUB/public/RegistrarContenido', false, $contexto);
        
         header("location: ../mostrarCont.php");
    }else{
        echo '<script type="text/javascript">
                alert("faltan datos");
                window.location.href="../registrarCont.php";
            </script>';

    }
}
