<?php
function agregarProyeccion(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR PROYECCION", 65);
    listarPeliculas($datos);
    $ids_peliculas = array_column($datos['peliculas'], 'id');
    echo "  (0 para cancelar)\n";
    $id_pelicula         = pedirEntero("ID de la pelicula", array_merge($ids_peliculas, [0]));
    if ($id_pelicula === 0) {
        return;
    }
    $sala                = readline("Sala (ej. Sala 1) : ");
    $horario             = readline("Horario (HH:MM)   : ");
    $precio              = (int)readline("Precio            : $");
    $boletos_disponibles = (int)readline("Boletos disp.     : ");
    $id = insertarProyeccion($datos, $id_pelicula, $sala, $horario, $precio, $boletos_disponibles);
    echo "\n  Proyeccion agregada con ID $id.\n";
    esperarEnter();
}
