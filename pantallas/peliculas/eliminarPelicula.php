<?php
function pantalla_eliminarPelicula(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR PELICULA", 65);
    listarPeliculas($datos);
    $ids = array_column($datos['peliculas'], 'id');
    echo "  (0 para cancelar)\n";
    $id = pedirEntero("ID de la pelicula a eliminar", array_merge($ids, [0]));
    if ($id === 0) {
        return;
    }

    $pelicula = buscarPelicula($datos, $id);
    echo "\n  Pelicula: {$pelicula['titulo']}\n";
    echo "  ¿Confirmar eliminacion? (s/n): ";
    $confirmacion = strtolower(trim(readline("")));

    if ($confirmacion === 's') {
        eliminarPelicula($datos, $id);
        echo "\n  Pelicula eliminada.\n";
    } else {
        echo "\n  Operacion cancelada.\n";
    }
    esperarEnter();
}
