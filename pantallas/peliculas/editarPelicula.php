<?php
function editarPelicula(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR PELICULA", 65);
    listarPeliculas($datos);
    $ids = array_column($datos['peliculas'], 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID de la pelicula a editar", array_merge($ids, [0]));
    if ($id === 0) {
        return;
    }

    $pelicula = buscarPelicula($datos, $id);
    echo "\n";
    echo "  Titulo actual   : {$pelicula['titulo']}\n";
    $titulo = readline("  Nuevo titulo    : ");
    if (trim($titulo) === '') {
        $titulo = $pelicula['titulo'];
    }

    echo "  Genero actual   : {$pelicula['genero']}\n";
    $genero = readline("  Nuevo genero    : ");
    if (trim($genero) === '') {
        $genero = $pelicula['genero'];
    }

    echo "  Duracion actual : {$pelicula['duracion']} min\n";
    $duracion_str = readline("  Nueva duracion  : ");
    $duracion = (trim($duracion_str) === '') ? $pelicula['duracion'] : (int)$duracion_str;

    actualizarPelicula($datos, $id, $titulo, $genero, $duracion);
    echo "\n  Pelicula actualizada.\n";
    esperarEnter();
}
