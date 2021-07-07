<?php


$url = "http://31.220.62.39/API/VIDEOCLUB/public/MostrarActores";

$json = file_get_contents($url);

echo $json;

