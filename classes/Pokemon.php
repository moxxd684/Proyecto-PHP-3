<?php

declare(strict_types=1);
class Pokemon
{
    public function __construct(
        private string $nombre,
        private int $identificador,
        private string $url_imagen,
        private int $peso,
        private int $altura,
        private int $experiencia_base,
        private string $nombre_especie,
        private string $color
    ) {
    }

    public static function obtener_y_crear_pokemon(string $ruta_api, int $id_pokemon): Pokemon
    {
        #construye la URL completa de la API concatenando la ruta base y el identificador del Pokémon
        $url = $ruta_api . $id_pokemon;
        #Obtener el contenido JSON desde la API
        $resultado = file_get_contents($url);
        #Decodificar el JSON a un array asociativo
        $datos = json_decode($resultado, true);

        #Extraer la experiencia base del Pokémon
        $experienciaBase = $datos['base_experience'];

        #Obtener los datos de la especie del Pokémon desde la URL proporcionada
        $urlEspecie = $datos['species']['url'];
        $resultadoEspecie = file_get_contents($urlEspecie);
        $datosEspecie = json_decode($resultadoEspecie, true);
        $nombreEspecie = $datosEspecie['name'];

        #Obtener el color del Pokémon desde la URL incluida en los datos de la especie
        $urlColor = $datosEspecie['color']['url'];
        $resultadoColor = file_get_contents($urlColor);
        $datosColor = json_decode($resultadoColor, true);
        $color = $datosColor['name'];

        #Crear y retornar una nueva instancia de Pokemon con todos los datos obtenidos
        return new self(
            $datos['name'],
            $datos['id'],
            $datos['sprites']['front_default'],
            $datos['weight'],
            $datos['height'],
            $experienciaBase,
            $nombreEspecie,
            $color
        );
    }

    public function obtener_datos(): array
    {
        return get_object_vars($this);
    }
}
