<?php // Vista: tabla de productos con su CRUD (se incluye desde index.php) ?>
<?php if (!$pdo): ?>
  <div class="alert alert-warning">Falta conectar la base de datos: importa <code>db/cafe_aurora.sql</code> en phpMyAdmin y revisa <code>config/conexion.php</code>.</div>
<?php endif; ?>

<form class="row g-2 mb-4" method="get" action="index.php#menu">
  <div class="col-md-9"><input class="form-control" name="q" placeholder="Buscar en el menú…" value="<?= htmlspecialchars($buscar) ?>"></div>
  <div class="col-md-3"><button class="btn btn-cafe w-100">Buscar</button></div>
</form>

<div class="table-responsive">
  <table class="table align-middle">
    <thead><tr><th>Producto</th><th>Categoría</th><th>Precio</th><th class="text-end">Acciones</th></tr></thead>
    <tbody>
    <?php foreach ($productos as $p): ?>
      <tr>
        <td>
          <form class="d-flex gap-2" method="post" action="controllers/ProductoController.php">
            <input type="hidden" name="accion" value="editar">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <input class="form-control form-control-sm" name="nombre" value="<?= htmlspecialchars($p['nombre']) ?>">
            <input class="form-control form-control-sm" name="precio" type="number" step="100" value="<?= $p['precio'] ?>" style="max-width:110px">
            <button class="btn btn-sm btn-outline-secondary">Guardar</button>
          </form>
        </td>
        <td><?= htmlspecialchars($p['categoria']) ?></td>
        <td>$<?= number_format($p['precio'], 0, ',', '.') ?></td>
        <td class="text-end">
          <form method="post" action="controllers/ProductoController.php" onsubmit="return confirm('¿Borrar este producto?')">
            <input type="hidden" name="accion" value="borrar">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <button class="btn btn-sm btn-outline-danger">Borrar</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<h3 class="h5 mt-4">Agregar producto</h3>
<form class="row g-2" method="post" action="controllers/ProductoController.php">
  <input type="hidden" name="accion" value="crear">
  <div class="col-md-5"><input class="form-control" name="nombre" placeholder="Nombre" required></div>
  <div class="col-md-3"><input class="form-control" name="precio" type="number" step="100" placeholder="Precio" required></div>
  <div class="col-md-2">
    <select class="form-select" name="categoria">
      <?php foreach ($categorias as $c): ?>
        <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['nombre']) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="col-md-2"><button class="btn btn-cafe w-100">Agregar</button></div>
</form>
