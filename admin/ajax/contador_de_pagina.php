<?php

require_once "../modelos/Contador_de_pagina.php";

$contador = new Contador_de_pagina();

$pagina       = isset($_POST["pagina_nombre"]) ? limpiarCadena($_POST["pagina_nombre"]) : "";
$nombre_day   = isset($_POST["nombre_day"]) ? limpiarCadena($_POST["nombre_day"]) : "";
$nombre_month = isset($_POST["nombre_month"]) ? limpiarCadena($_POST["nombre_month"]) : "";
$nombre_year  = isset($_POST["nombre_year"]) ? limpiarCadena($_POST["nombre_year"]) : "";

$rspta =  $contador->contador_de_pagina($pagina, $nombre_day, $nombre_month, $nombre_year);

echo json_encode($rspta, true);