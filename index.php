<?php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/Pokemon.php';

#Obtener los datos del primer Pokémon 
$pokemon1 = Pokemon::obtener_y_crear_pokemon(RUTA_API, 25);

#Obtener los datos del segundo Pokémon 
$pokemon2 = Pokemon::obtener_y_crear_pokemon(RUTA_API, 6);
?>

<!-- Renderizar la plantilla del encabezado, pasando el título de la página -->
<?php renderizar_plantilla('head', ["titulo" => "Información de Pokémon"]); ?>
<div class="container">
    <div class="row">
        <!-- Renderizar la plantilla principal para mostrar los datos del primer Pokémon -->
        <div class="col-md-6">
            <?php renderizar_plantilla('main', $pokemon1->obtener_datos()); ?>
        </div>
        <!-- Renderizar la plantilla principal para mostrar los datos del segundo Pokémon -->
        <div class="col-md-6">
            <?php renderizar_plantilla('main', $pokemon2->obtener_datos()); ?>
        </div>
    </div>
</div>