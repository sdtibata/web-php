<?php
// Controlador: recibe los formularios (GET para buscar, POST para crear, editar y borrar)
require_once __DIR__ . '/../config/conexion.php';
require_once __DIR__ . '/../models/Producto.php';

$pdo = conectar();
$modelo = $pdo ? new Producto($pdo) : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $modelo) {
    $accion = $_POST['accion'] ?? '';
    if ($accion === 'crear') {
        $modelo->crear(trim($_POST['nombre']), (float) $_POST['precio'], (int) $_POST['categoria']);
    } elseif ($accion === 'editar') {
        $modelo->editar((int) $_POST['id'], trim($_POST['nombre']), (float) $_POST['precio']);
    } elseif ($accion === 'borrar') {
        $modelo->borrar((int) $_POST['id']);
    }
    header('Location: ../views/gracias.php?accion=' . urlencode($accion));
    exit;
}

// GET: listado (con búsqueda opcional ?q=)
$buscar = trim($_GET['q'] ?? '');
$productos = $modelo ? $modelo->todos($buscar) : [];
$categorias = $modelo ? $modelo->categorias() : [];
