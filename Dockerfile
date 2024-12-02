FROM php:8.2-apache

# Instalar dependências do PostgreSQL e PDO PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar módulos adicionais do Apache, se necessário
RUN a2enmod rewrite

# Copiar arquivos do projeto (opcional, se não usar volume)
COPY ./src /var/www/html