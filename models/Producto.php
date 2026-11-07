<?php
// Modelo: todas las consultas a la tabla productos
class Producto {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function todos(string $buscar = ''): array {
        $sql = "SELECT p.id, p.nombre, p.precio, c.nombre AS categoria
                FROM productos p JOIN categorias c ON c.id = p.categoria_id
                WHERE p.nombre LIKE ? ORDER BY p.id";
        $consulta = $this->pdo->prepare($sql);
        $consulta->execute(['%' . $buscar . '%']);
        return $consulta->fetchAll();
    }

    public function categorias(): array {
        return $this->pdo->query("SELECT id, nombre FROM categorias ORDER BY nombre")->fetchAll();
    }

    public function crear(string $nombre, float $precio, int $categoria): void {
        $consulta = $this->pdo->prepare("INSERT INTO productos (nombre, precio, categoria_id) VALUES (?, ?, ?)");
        $consulta->execute([$nombre, $precio, $categoria]);
    }

    public function editar(int $id, string $nombre, float $precio): void {
        $consulta = $this->pdo->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
        $consulta->execute([$nombre, $precio, $id]);
    }

    public function borrar(int $id): void {
        $consulta = $this->pdo->prepare("DELETE FROM productos WHERE id = ?");
        $consulta->execute([$id]);
    }
}
