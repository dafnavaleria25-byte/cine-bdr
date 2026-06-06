<?php
function editarPeliculas(&$datos, $conn) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR PELICULAS", 67);")
    listarPeliculas($conn);
    $peliculas = obtenerpeliculas($conn);
    if (count($peliculas) === 0) {
        esperarEnter();
        return;
    }
    $ids = array_column($datos['peliculas'], 'id');
    echo "  (0 para cancelar)\ n";
    $id = pedirEntero("ID a editar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n Cancelado.\n";
        esperandoEnter();
        return;
    }
        $e = buscarPeliculas($datos, $id);
        switch ($op) {
            case 1:
                agregarPeliculas($conn);
                break;
            case 2:
                editarPeliculas();
                break;
            case 3:
                eliminarPeliculas($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
