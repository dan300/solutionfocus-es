#!/bin/bash

# Quick Start Script for SolutionFocus.es
# This script sets up the project for local development

echo "🚀 Setting up SolutionFocus.es..."

# Check if .env exists
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cp .env.example .env
    php artisan key:generate
else
    echo "✅ .env file already exists"
fi

# Check if database exists
if [ ! -f database/database.sqlite ]; then
    echo "🗄️  Creating SQLite database..."
    touch database/database.sqlite
else
    echo "✅ Database already exists"
fi

# Install dependencies
echo "📦 Installing Composer dependencies..."
composer install --quiet

echo "📦 Installing NPM dependencies..."
npm install --silent

# Run migrations
echo "🔧 Running migrations..."
php artisan migrate --force

# Seed database
echo "🌱 Seeding database with sample content..."
php artisan db:seed --force

# Build assets
echo "🎨 Building frontend assets..."
npm run build

echo ""
echo "✨ Setup complete!"
echo ""
echo "📝 Admin Login:"
echo "   URL: http://127.0.0.1:8000/admin"
echo "   Email: admin@solutionfocus.es"
echo "   Password: password"
echo ""
echo "🚀 Start the server with:"
echo "   php artisan serve"
echo ""

