<?php
function buscarPelicula($conn,) {
    $consulta = "SELECT id, titulo, genero, duracion FROM peliculas WHERE id = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $resultado = $resultado->fetch_assoc();
    return $resultado;

 }

    

    

