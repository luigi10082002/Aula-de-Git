<?php
require 'config.php';

try {
    // Verifica se a tabela existe
    $tableCheck = $conn->query("SELECT 1 FROM clientes LIMIT 1");
    
    $sql = "SELECT Id_Cliente, Nome, Endereco, Cidade, Telefone FROM clientes";
    $stmt = $conn->query($sql);
    $clientes = $stmt->fetchAll();

    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
    <meta charset='UTF-8'>
    <title>Lista de Clientes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #007BFF; text-align: center; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007BFF; color: white; position: sticky; top: 0; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #e9f7ff; }
        .count { margin: 15px 0; color: #666; }
    </style>
    </head>
    <body>
    <div class='container'>
    <h2>Lista de Clientes</h2>
    <div class='count'>Total de clientes: " . count($clientes) . "</div>";

    if (count($clientes) > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                </tr>";
        
        foreach ($clientes as $row) {
            echo "<tr>
                    <td>{$row['Id_Cliente']}</td>
                    <td>{$row['Nome']}</td>
                    <td>{$row['Endereco']}</td>
                    <td>{$row['Cidade']}</td>
                    <td>{$row['Telefone']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum cliente encontrado no banco de dados.</p>";
    }

    echo "</div></body></html>";

} catch (PDOException $e) {
    echo "<div class='container'>
            <h2>Erro ao acessar o banco de dados</h2>
            <p><strong>Mensagem:</strong> " . $e->getMessage() . "</p>
            <p>Verifique se o banco de dados e a tabela foram criados corretamente.</p>
          </div>";
}
?>