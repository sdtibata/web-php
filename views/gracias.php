<?php
$mensajes = ['crear' => 'Producto agregado.', 'editar' => 'Producto actualizado.', 'borrar' => 'Producto eliminado.'];
$texto = $mensajes[$_GET['accion'] ?? ''] ?? 'Tu solicitud fue recibida.';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="4;url=../index.php#menu">
  <title>¡Gracias! · Café Aurora</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="d-flex align-items-center min-vh-100">
  <main class="container text-center">
    <h1 class="display-5 latido">¡Gracias!</h1>
    <p class="lead"><?= htmlspecialchars($texto) ?></p>
    <p>Volviendo al menú en unos segundos… <a href="../index.php#menu">volver ahora</a></p>
  </main>
</body>
</html>
