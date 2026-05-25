<?php
function pantalla_venderBoleto(&$datos) {
    $continuar = true;
    while ($continuar) {
        limpiarPantalla();
        verCartelera($datos);

        $cartelera = obtenerCartelera($datos);
        if (empty($cartelera)) {
            echo "\n  No hay proyecciones disponibles.\n";
            esperarEnter();
            return;
        }

        $ids_proyecciones = array_column($cartelera, 'id');
        $ids_con_cero     = array_merge($ids_proyecciones, [0]);
        $id_proyeccion    = pedirEntero("ID Proyeccion (0 para volver)", $ids_con_cero);

        if ($id_proyeccion === 0) {
            return;
        }

        // Buscar boletos disponibles de esa proyeccion
        $disponibles = 0;
        for ($i = 0; $i < count($cartelera); $i++) {
            if ($cartelera[$i]['id'] === $id_proyeccion) {
                $disponibles = $cartelera[$i]['boletos_disponibles'];
                break;
            }
        }

        $opciones_cantidad = [];
        for ($n = 1; $n <= $disponibles; $n++) {
            $opciones_cantidad[] = $n;
        }

        echo "  Boletos disponibles: $disponibles\n";
        $cantidad = pedirEntero("Cantidad de boletos", $opciones_cantidad);

        $resultado = venderBoleto($datos, $id_proyeccion, $cantidad);

        if ($resultado === 'ok') {
            echo "\n  Venta exitosa. Se vendieron $cantidad boleto(s).\n";
        } elseif ($resultado === 'insuficientes') {
            echo "\n  No hay suficientes boletos disponibles.\n";
        } else {
            echo "\n  Proyeccion no encontrada.\n";
        }

        echo "\n  ¿Vender otro? (s/n): ";
        $respuesta = strtolower(trim(readline("")));
        if ($respuesta !== 's') {
            $continuar = false;
        }
    }
}
