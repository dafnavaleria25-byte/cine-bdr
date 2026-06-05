<?php
 require_once __DIR__ . '/../config.php';

function conectar() {
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    return null;
}
echo "conexion a la base de datos:\n";
conectar();
echo "conectado correctamente.\n";

