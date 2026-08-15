# ============================================================
#  SABINO COMPU SERVICE — Imagen Docker para deploy
#  PHP 8.2 + Apache, sirviendo desde la carpeta public/
# ============================================================

FROM php:8.2-apache

# La raíz web es public/ (donde está index.php)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Habilitar mod_rewrite y permitir .htaccess
RUN a2enmod rewrite \
    && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Copiar el proyecto
COPY . /var/www/html/

# Permisos correctos para Apache
RUN chown -R www-data:www-data /var/www/html
