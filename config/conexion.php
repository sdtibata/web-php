<?php
// Datos de la base de datos.
// En Hostinger: hPanel → Bases de datos → MySQL. Copia aquí el nombre de la base, el usuario y la contraseña.
// En XAMPP: host 'localhost', usuario 'root', contraseña vacía y base 'cafe_aurora'.
const DB_HOST = 'localhost';
const DB_NAME = 'cafe_aurora';
const DB_USER = 'root';
const DB_PASS = '';

function conectar(): ?PDO {
    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        return null; // la página se muestra igual y avisa que falta configurar la base
    }
}
