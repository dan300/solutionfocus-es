# SolutionFocus.es - Bilingual Coaching Website

A modern, bilingual (English/Spanish) CMS-powered website for Solution Focused Coach Orsi Szabo, built with Laravel 12, Filament Admin Panel, and Tailwind CSS 4.

## 🌐 Bilingual Features

- **Base Language**: English
- **Secondary Language**: Spanish
- **Language Switcher**: Available in header (both desktop and mobile)
- **Automatic Locale Detection**: Based on URL prefix or session
- **Fallback**: Defaults to English if no locale is specified

## 📄 Pages Structure

### English Pages (slugs):
- `/team` - Meet the Team
- `/training` - About the Training
- `/certification` - Coach Certification
- `/team-coaching` - Team Coaching Sessions
- `/contact` - Contact

### Spanish Pages (slugs):
- `/equipo` - Equipo
- `/formacion` - Formación
- `/certificacion` - Certificación
- `/coaching-equipos` - Coaching de Equipos
- `/contacto` - Contacto

## 🔧 Technical Implementation

### Language Routes
- Default (no prefix): Uses session locale or defaults to English
- Prefixed routes: `/en/*` and `/es/*` for explicit locale selection
- Language switcher: `/language/{locale}` sets session and redirects back

### Middleware
- `SetLocale` middleware handles locale detection and application
- Checks URL prefix first, then session, defaults to English
- Registered in web middleware group

### Translation Files
- `lang/en/messages.php` - English translations
- `lang/es/messages.php` - Spanish translations
- All UI text uses `__('messages.key')` helper
- Database content is stored separately per language

## 🚀 Quick Start

```bash
# Setup
composer install
npm install
touch database/database.sqlite
php artisan migrate
php artisan db:seed
npm run build

# Start server
php artisan serve
```

Visit:
- English (default): http://127.0.0.1:8000
- Spanish: http://127.0.0.1:8000/language/es
- Admin: http://127.0.0.1:8000/admin

## 🔑 Admin Access

- **URL**: http://127.0.0.1:8000/admin
- **Email**: admin@solutionfocus.es
- **Password**: password

⚠️ **Change password in production!**

## 📝 Content Management

### Managing Bilingual Pages

1. Log into admin panel
2. Go to Pages
3. Create separate page entries for each language:
   - English slugs: `team`, `training`, `certification`, `team-coaching`
   - Spanish slugs: `equipo`, `formacion`, `certificacion`, `coaching-equipos`

### Adding New Languages

To add additional languages:

1. Create new language file: `lang/{locale}/messages.php`
2. Add locale to `$supportedLocales` in `SetLocale` middleware
3. Update language switcher in `header.blade.php`
4. Create corresponding page content in database

## 🎨 Design Features

- Teal color scheme for consistency
- Solution-focused, friendly language
- Responsive design (mobile-first)
- Clean, modern interface
- Accessible navigation

## 🌍 Language Switcher

The language switcher appears in:
- Desktop header (top right)
- Mobile menu (bottom)

Clicking EN/ES:
1. Sets session locale
2. Redirects to same page
3. Updates all UI text
4. Persists across page loads

## 📦 Technology Stack

- **Backend**: Laravel 12
- **Admin Panel**: Filament 3.2
- **Frontend**: Blade + Tailwind CSS 4 + Alpine.js
- **Localization**: Laravel's built-in i18n
- **Database**: SQLite (local) / MySQL (production)

## 🗄️ Database Structure

### Pages Table
- Separate entries for each language
- Slug determines language association
- Example: `team` (EN) and `equipo` (ES)

### Settings Table
- Language-neutral configuration
- Shared across all locales

## 🔗 URL Structure

### Without Prefix (uses session)
- `/` - Homepage
- `/team` or `/equipo` - Team page
- `/contact` - Contact page

### With Prefix (explicit locale)
- `/en/` - English homepage
- `/en/team` - English team page
- `/es/` - Spanish homepage
- `/es/equipo` - Spanish team page

## 📱 Responsive Breakpoints

- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

## 🔒 Security

- CSRF protection
- SQL injection prevention
- XSS protection
- Password hashing
- Session security

## 📧 Email Configuration

Contact form supports both languages:
- Success messages in user's locale
- Email templates can be localized
- Configure SMTP in Laravel Cloud

## 🚀 Deployment to Laravel Cloud

1. Connect repository
2. Set environment variables
3. Configure MySQL database
4. Run migrations: `php artisan migrate --force`
5. Seed database: `php artisan db:seed --force`
6. Build assets: `npm run build`

### Environment Variables

```env
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
```

## 🎯 Solution-Focused Approach

All content emphasizes:
- Building futures, not analyzing problems
- Client resources and strengths
- Small, concrete steps
- What works, not what's broken
- Positive, empowering language

## 📚 Documentation

- **README.md** - This file
- **DEPLOYMENT.md** - Laravel Cloud deployment
- **CMS-GUIDE.md** - Content management
- **PROJECT-SUMMARY.md** - Project overview

## 🔧 Development Commands

```bash
# Switch language programmatically
App::setLocale('es');

# Get current locale
app()->getLocale();

# Translate strings
__('messages.nav.team')

# Clear cache
php artisan cache:clear
php artisan view:clear
```

## ✨ Features Summary

- ✅ Bilingual (EN/ES) with easy language switching
- ✅ Solution-focused content
- ✅ CMS-powered with Filament
- ✅ Responsive design
- ✅ SEO optimized
- ✅ Admin panel
- ✅ Contact form
- ✅ Modern UI

## 🆘 Troubleshooting

### Language not switching
- Clear browser cache
- Check session cookie
- Verify middleware is registered

### Translations missing
- Check language files exist
- Verify key matches `messages.{key}`
- Default language (EN) will be used as fallback

### Wrong content showing
- Verify page slug matches locale
- Check database has both EN and ES pages
- Ensure published status is true

---

**Built with ❤️ for Solution-Focused Coaching**

Ready to deploy bilingual! 🌍🚀
