<?php
// Configurações do banco de dados Azure SQL Server
define('DB_SERVER', 'SERVER');
define('DB_DATABASE', 'DB');
define('DB_USERNAME', 'USENAME');
define('DB_PASSWORD', 'PASS');

try {
    $conn = new PDO(
        "sqlsrv:server=" . DB_SERVER . ";Database=" . DB_DATABASE,
        DB_USERNAME,
        DB_PASSWORD
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("<strong>Erro ao conectar no SQL Server:</strong> " . $e->getMessage());
}
?>
