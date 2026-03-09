FROM php:8.2-cli

# Installer dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    curl \
    && docker-php-ext-install pdo pdo_pgsql

# Installer composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Dossier de travail
WORKDIR /var/www

# Copier le projet
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner permissions
RUN chmod -R 775 storage bootstrap/cache

# Nettoyer cache Laravel
RUN php artisan optimize:clear || true

# Exposer le port utilisé par Render
EXPOSE 10000

# Commande de démarrage
CMD php artisan migrate --force && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan serve --host=0.0.0.0 --port=$PORT
