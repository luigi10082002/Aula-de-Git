# Listagem de Clientes com PHP + Azure SQL Server

## 📌 Descrição
Aplicação em PHP que se conecta a um banco de dados **SQL Server na Azure** e lista todos os clientes cadastrados em uma tabela HTML estilizada.

---

## 🚀 Como configurar

### 1. Criar o banco na Azure
1. Acesse o [Portal Azure](https://portal.azure.com/).
2. Crie um **SQL Database** com um **SQL Server** associado.
3. Configure o **Firewall** para permitir conexões do seu IP.
4. No banco, execute o script `clientes.sql` para criar a tabela e inserir os dados.

---

### 2. Executar localmente
1. Instale o [XAMPP](https://www.apachefriends.org/).
2. Ative o módulo **Apache**.
3. Verifique se a extensão `pdo_sqlsrv` está habilitada no `php.ini`.
4. Coloque os arquivos `index.php` e `clientes.sql` dentro da pasta `htdocs` do XAMPP.
5. No `index.php`, crie e altere o arquivo config.php seguindo o arquivo exemplo_config.php
