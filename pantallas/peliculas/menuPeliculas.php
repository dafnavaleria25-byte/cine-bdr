<?php
function menuPeliculas(&$datos ) {
    limpiarPantalla();
    echo ""
    titulo("EDITAR PELICULAS", 65);")
    listarPeliculas($conn);
    $peliculas = obtenerpeliculas($conn);
    if (count($peliculas) === 0)
        esperarEnter();
        return;


    $ids = array_column($datos 'peliculas' , 'id');
    echo "  (0 para cancelar) n";
    $id = pedirEntero(ID a editar", array_merge($ids,  )
    if ($id === 0)
        echo "\n Canceldo.n";
        esperandoEnter();
        return;

        $op = pedirEntero("Opcion", [0, 1, 2, 3, ]);
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
