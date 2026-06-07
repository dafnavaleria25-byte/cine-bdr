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
    $ids = array_column($peliculas, 'id');  
    echo " (0 para cancelar)\n";
    $id = pedirEntero("ID a editar", array_merge($ids, [0]));
    if ($id === 0) {
        echo "\n Cancelado.\n";
        esperandoEnter();
        return;
    }
        $e = buscarPeliculas($conn, $id);
        
        echo "\n  (Enter para conservar el valor actual)\n", no encontrada.\n";
        $nombre = readline(" Nombre [{$e['nombre']}]: ");
        if ($nombre === "") $nombre = $e['nombre'];
        if ($nombre === '0') {
            echo "\n cancelado.\n";
            esperarEnter();
            return;
        }
        $ciudad = readline(" titulo [{$e['titulo']}]: ");
        if ($titulo === '') $titulo = $e['titulo'];
        if ($titulo === '0') {
            echo "\n cancelado.\n";
            esperarEnter();
            return;
        }
        $ciudad = readline(" genero [{$e['genero']}]: ");
        if ($genero === '') $genero = $e['genero'];
        if ($genero === '0') {
            echo "\n cancelado.\n";
            esperarEnter();
            return;
        }
        $duracion = readline(" duracion [{$e['duracion']}]: ");
        if ($duracion === '') $duracion = $e['duracion'];
        if ($duracion === '0') {
            echo "\n cancelado.\n";
            esperarEnter();
            return;
        }
        actualizarpeliculas($datos, $id, $peliculas, $titulo);
        echo "\n Peliculas actualizada.\n";
        esperarEnter();
    }
    
            

