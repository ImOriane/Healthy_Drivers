FROM php:8.2-cli

# Installer dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    curl \
    sudo \
    && docker-php-ext-install pdo pdo_pgsql

# Installer composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Installer Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Dossier de travail
WORKDIR /var/www

# Copier le projet
COPY . .

# Installer dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Installer dépendances front-end et compiler les assets
RUN npm install && npm run build

# Donner permissions
RUN chmod -R 775 storage bootstrap/cache

# Nettoyer cache Laravel
RUN php artisan optimize:clear || true

# Exposer le port utilisé par Render
EXPOSE 10000

# Commande de démarrage
CMD php artisan migrate --force && \
    php artisan db:seed --class=DatabaseSeeder && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan serve --host=0.0.0.0 --port=$PORT
