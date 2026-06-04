<?php
// ============================================================
//  funciones.php — Carga todos los modulos del sistema
//  Cada carpeta = un tema, cada archivo = una funcion
// ============================================================
require_once 'datos.php';
// --- Utilidades ---
require_once 'funciones/centrar.php';
require_once 'funciones/titulo.php';
require_once 'funciones/limpiarPantalla.php';
require_once 'funciones/esperarEnter.php';
require_once 'funciones/pedirEntero.php';
require_once 'funciones/dibujarTabla.php';
require_once 'funciones/datos.php';
require_once 'funciones/conexion.php';

// --- DB: Peliculas ---
require_once 'db/peliculas/obtenerPeliculas.php';
require_once 'db/peliculas/buscarPelicula.php';
require_once 'db/peliculas/insertarPelicula.php';
require_once 'db/peliculas/actualizarPelicula.php';
require_once 'db/peliculas/eliminarPelicula.php';

// --- DB: Proyecciones ---
require_once 'db/proyecciones/obtenerCartelera.php';
require_once 'db/proyecciones/insertarProyeccion.php';
require_once 'db/proyecciones/venderBoleto.php';

// --- Pantallas: Peliculas ---
require_once 'pantallas/peliculas/listarPeliculas.php';
require_once 'pantallas/peliculas/agregarPelicula.php';
require_once 'pantallas/peliculas/editarPelicula.php';
require_once 'pantallas/peliculas/eliminarPelicula.php';
require_once 'pantallas/peliculas/menuPeliculas.php';

// --- Pantallas: Proyecciones ---
require_once 'pantallas/proyecciones/verCartelera.php';
require_once 'pantallas/proyecciones/agregarProyeccion.php';
require_once 'pantallas/proyecciones/venderBoleto.php';
require_once 'pantallas/proyecciones/menuProyecciones.php';
