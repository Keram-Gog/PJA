# Используем официальный PHP-образ с поддержкой Composer и PostgreSQL
FROM php:8.2-fpm

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем файлы проекта
WORKDIR /var/www
COPY . .

# Установка Laravel-зависимостей
RUN composer install --no-dev --optimize-autoloader

# Генерация config cache (не забудь указать APP_KEY потом)
RUN php artisan config:cache

# Указываем порт
EXPOSE 8000

# Команда запуска
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
