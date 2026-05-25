<?php
function buscarPelicula(&$datos, $id) {
    for ($i = 0; $i < count($datos['peliculas']); $i++) {
        if ($datos['peliculas'][$i]['id'] === $id) {
            return $datos['peliculas'][$i];
        }
    }
    return null;
}
