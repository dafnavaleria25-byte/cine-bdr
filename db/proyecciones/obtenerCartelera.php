<?php
function obtenerCartelera(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['proyecciones']); $i++) {
        $proyeccion = $datos['proyecciones'][$i];
        if ($proyeccion['boletos_disponibles'] === 0) {
            continue;
        }
        $pelicula = null;
        for ($j = 0; $j < count($datos['peliculas']); $j++) {
            if ($datos['peliculas'][$j]['id'] === $proyeccion['id_pelicula']) {
                $pelicula = $datos['peliculas'][$j];
                break;
            }
        }
        if ($pelicula !== null) {
            $resultado[] = [
                'id'                  => $proyeccion['id'],
                'sala'                => $proyeccion['sala'],
                'horario'             => $proyeccion['horario'],
                'precio'              => $proyeccion['precio'],
                'boletos_vendidos'    => $proyeccion['boletos_vendidos'],
                'boletos_disponibles' => $proyeccion['boletos_disponibles'],
                'titulo'              => $pelicula['titulo'],
                'genero'              => $pelicula['genero'],
                'duracion'            => $pelicula['duracion'],
            ];
        }
    }
    return $resultado;
}
