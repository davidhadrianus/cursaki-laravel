#!/bin/sh

echo "🔧 Instalando dependências..."
composer install

echo "⚙️ Rodando migrations..."
php artisan migrate --force

echo "🚀 Iniciando PHP-FPM..."
exec php-fpm
