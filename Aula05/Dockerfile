# Usa a imagem oficial do PHP com Apache como base
FROM php:8.2-apache

# Define o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Instala MariaDB + extensões necessárias
RUN apt-get update && \
    apt-get install -y mariadb-server mariadb-client zlib1g-dev libzip-dev unzip && \
    docker-php-ext-install pdo_mysql opcache zip && \
    rm -rf /var/lib/apt/lists/*

# Configura o MySQL para UTF-8 como padrão
RUN echo "[mysqld]\n\
character-set-server=utf8mb4\n\
collation-server=utf8mb4_general_ci\n\
[client]\n\
default-character-set=utf8mb4\n\
[mysqldump]\n\
default-character-set=utf8mb4\n" > /etc/mysql/conf.d/charset.cnf

# Expõe a porta 3306 para acesso externo ao MySQL
EXPOSE 3306

# Copia os scripts de inicialização e banco de dados
COPY ./Aula05/docker-entrypoint.sh /usr/local/bin/
COPY ./Aula05/clientes.sql /docker-entrypoint-initdb.d/
COPY ./Aula05/config.php /var/www/html/
COPY ./Aula05/index.php /var/www/html/

# Configura o Apache para usar UTF-8 como padrão
RUN echo "AddDefaultCharset UTF-8" >> /etc/apache2/apache2.conf

# Dá permissão de execução ao script de inicialização
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Usa o script de inicialização como entrypoint
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["apache2-foreground"]
