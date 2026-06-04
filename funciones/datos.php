<?php
function datosIniciales() {
    $peliculas = [
        ['id' => 1, 'titulo' => 'El padrino',         'genero' => 'Crimen', 'duracion' => 175],
        ['id' => 2, 'titulo' => 'COCO',                  'genero' => 'Caricatura',  'duracion' => 202],
        ['id' => 3, 'titulo' => 'La Era de Hielo',          'genero' => 'Animacion', 'duracion' => 81],
        ['id' => 4, 'titulo' => 'Spider-Man: No Way Home',  'genero' => 'Accion',    'duracion' => 148],
        ['id' => 5, 'titulo' => 'El Senor de los Anillos',  'genero' => 'Fantasia',  'duracion' => 178],
    ];

    $proyecciones = [
        ['id' => 1, 'id_pelicula' => 1, 'sala' => 'Sala 1', 'horario' => '14:00', 'precio' => 80, 'boletos_disponibles' => 50, 'boletos_vendidos' => 12],
        ['id' => 2, 'id_pelicula' => 1, 'sala' => 'Sala 2', 'horario' => '17:00', 'precio' => 80, 'boletos_disponibles' => 42, 'boletos_vendidos' => 8 ],
        ['id' => 3, 'id_pelicula' => 2, 'sala' => 'Sala 1', 'horario' => '19:30', 'precio' => 90, 'boletos_disponibles' => 30, 'boletos_vendidos' => 20],
        ['id' => 4, 'id_pelicula' => 3, 'sala' => 'Sala 3', 'horario' => '11:00', 'precio' => 70, 'boletos_disponibles' => 75, 'boletos_vendidos' => 5 ],
        ['id' => 5, 'id_pelicula' => 4, 'sala' => 'Sala 2', 'horario' => '20:00', 'precio' => 95, 'boletos_disponibles' => 15, 'boletos_vendidos' => 35],
    ];

    return ['peliculas' => $peliculas, 'proyecciones' => $proyecciones];
}
