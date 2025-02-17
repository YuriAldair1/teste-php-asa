# Usar uma imagem base do PHP 7.4 com Apache
FROM php:7.4-apache

# Instalar dependências necessárias para o Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Habilitar o mod_rewrite do Apache (necessário para o Laravel)
RUN a2enmod rewrite

# Definir o diretório de trabalho no container
WORKDIR /var/www/html

# Copiar os arquivos do Laravel para o contêiner
COPY . /var/www/html

COPY public/.htaccess /var/www/html/public/.htaccess



# Instalar as dependências do Composer (instalar o Composer no container)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir as permissões corretas para os diretórios do Laravel

ENV NODE_ENV $NODE_ENV

ENV LARAVEL_PATH=/var/www/html

RUN mkdir -p "$LARAVEL_PATH/storage" "$LARAVEL_PATH/bootstrap/cache"

RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html>\n\
        AllowOverride All\n\
        Order allow,deny\n\
        Allow from all\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf


RUN find "$LARAVEL_PATH" -type d -exec chmod 755 {} \; \
    && find "$LARAVEL_PATH" -type f -exec chmod 644 {} \; \
    && chmod -R 775 "$LARAVEL_PATH/storage" \
    && chmod -R 775 "$LARAVEL_PATH/bootstrap/cache" \
    && chown -R www-data:www-data "$LARAVEL_PATH"


#RUN composer install --optimize-autoloader --no-dev

# Rodar o composer install para instalar as dependências do Laravel
RUN composer install --no-interaction --prefer-dist

# RUN php artisan config:cache \
#     && php artisan config:clear \
#     && php artisan cache:clear \
#     && php artisan route:cache \
#     && php artisan view:cache

#RUN php artisan migrate

# Expor a porta 80
EXPOSE 8000


# Iniciar o Apache quando o contêiner for iniciado
CMD ["apache2-foreground"]
