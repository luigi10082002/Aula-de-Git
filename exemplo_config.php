<?php
// Configurações do banco de dados MySQL
define('DB_SERVER', 'SERVER');
define('DB_DATABASE', 'DATABASE');
define('DB_USERNAME', 'USER');
define('DB_PASSWORD', 'SENHA');

try {
    $conn = new PDO(
        "mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE,
        DB_USERNAME,
        DB_PASSWORD
    );
    // Define o modo de erro do PDO para lançar exceções.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Define o charset para garantir que os dados sejam tratados corretamente.
    $conn->exec("set names utf8");
    //echo "Conexão com o MySQL estabelecida com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, exibe uma mensagem amigável.
    die("<strong>Erro ao conectar no MySQL:</strong> " . $e->getMessage());
}
?>
