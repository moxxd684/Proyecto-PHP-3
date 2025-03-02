
<main class="bg-dark text-white p-4">
    <div class="container"> <!-- Contenedor para centrar el contenido -->
        <div class="d-flex flex-column align-items-center">
            <!-- Columna para la imagen del Pokémon -->
            <div class="w-100 text-center px-md-3">
                <!-- Se muestra la imagen del Pokémon -->
                <img src="<?= $url_imagen; ?>" class="img-fluid rounded pokemon-image" alt="Imagen de <?= $nombre ?>">
            </div>
            <!-- Columna para la información detallada del Pokémon -->
            <div class="col-md pokemon-info">
                <!-- Se muestra el nombre y el identificador del Pokémon -->
                <h3 class="text-md-start"><?= $nombre ?> - ID: <?= $identificador ?></h3>
                <!-- Se muestra la experiencia base del Pokémon -->
                <p class="text-md-start">Experiencia base: <?= $experiencia_base; ?></p>
                <!-- Se muestra la especie del Pokémon -->
                <p class="text-md-start">Especie: <?= $nombre_especie; ?></p>
                <!-- Se muestra el color del Pokémon -->
                <p class="text-md-start">Color: <?= $color; ?></p>
                <!-- Se muestra el peso-->
                <p class="text-md-start">Peso: <?= $peso / 10; ?> kg</p>
                <!-- Se muestra la altura-->
                <p class="text-md-start">Altura: <?= $altura / 10; ?> m</p>
            </div>
        </div>
    </div>
</main>
