FROM php:8.2-fpm

# Установим зависимости
RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql zip

# Установим Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Рабочая директория
WORKDIR /var/www

# Копируем все файлы проекта
COPY . .

# Проверка и отладка composer
RUN composer validate || true
RUN composer install --no-dev --optimize-autoloader || cat /var/www/storage/logs/laravel.log || true

# Кеш конфигурации
RUN php artisan config:cache || true

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
