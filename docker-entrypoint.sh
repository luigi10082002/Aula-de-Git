#!/bin/bash

# Inicia o serviço do MySQL em segundo plano
mysqld_safe --skip-grant-tables &

# Espera o MySQL iniciar completamente
echo "Aguardando o MySQL iniciar..."
while ! mysqladmin ping -h localhost --silent; do
    sleep 1
done
echo "MySQL iniciado."

# Define a senha para o usuário 'root'
# Importante: A senha 'minhasenha123' é apenas um exemplo. Use uma senha forte em um ambiente de produção.
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'minhasenha123'; FLUSH PRIVILEGES;"

# Verifica se o banco de dados já existe.
if ! mysql -u root -p'minhasenha123' -e "USE clientes;" 2>/dev/null; then
    echo "Banco de dados não encontrado. Executando script SQL..."
    # Executa o script SQL para criar o banco de dados e as tabelas
    mysql -u root -p'minhasenha123' < /docker-entrypoint-initdb.d/clientes.sql
else
    echo "Banco de dados já existe. Pulando a execução do script SQL."
fi

# Inicia o Apache em primeiro plano, mantendo o contêiner ativo
exec "$@"