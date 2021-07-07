<?php

if (isset($_POST['buscar'])) {

    if (
        $_POST['nombre']
    ) {
        $nombre = $_POST['nombre'];
        $par = str_replace(" ","%20",$nombre);
        $url = "http://31.220.62.39/API/VIDEOCLUB/public/Actor/".$par;
        $json = file_get_contents($url);
        $array = json_decode($json, true);
        include('header.php');
        include('navbar.php');
        echo "<table border='1'align='center' style='background-color: #FFFFFF;'><thead><tr><td>Nombre</td><td>Apellido</td><td>Fecha de nacimiento</td><td>Sexo</td></tr></thead><tbody>";
        foreach($array as $post){
            echo "<tr><td>".$post['nombre']."</td><td>".$post['apellido']."</td><td>".$post['fecha_nac']."</td><td>".$post['sexo']."</td></tr>";
        }
        echo "</tbody></table>";
    }else{
        echo '<script type="text/javascript">
                alert("faltan datos");
                window.location.href="../buscarDirector.php";
            </script>';

    }
}



