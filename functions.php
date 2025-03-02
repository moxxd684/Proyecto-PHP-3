<?php

declare(strict_types=1);
function renderizar_plantilla(string $plantilla, array $datos = [])
{
    extract($datos); #Convierte cada clave del array en una variable
    require "templates/$plantilla.php"; #Incluye la plantilla correspondiente dentro de templates
}

function obtener_datos_desde_url(string $url): array
{
    $resultado = file_get_contents($url); 
    $datos = json_decode($resultado, true); #Decodifica el JSON a un array asociativo
    return $datos; #Devuelve el array de datos
}
