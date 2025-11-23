# Laravel Cloud Deployment Guide

This guide will help you deploy SolutionFocus.es to Laravel Cloud.

## Pre-Deployment Checklist

- [ ] GitHub repository is set up
- [ ] All code is committed and pushed
- [ ] Laravel Cloud account is created
- [ ] Domain `solutionfocus.es` is ready

## Step 1: Create Laravel Cloud Project

1. Log in to Laravel Cloud
2. Click "New Project"
3. Connect your GitHub repository
4. Select the `main` branch
5. Choose a region (Europe for Spain)

## Step 2: Configure Database

1. In Laravel Cloud dashboard, go to "Database"
2. Create a MySQL database
3. Note down the connection details

## Step 3: Configure Environment Variables

Go to "Environment" in Laravel Cloud and set:

```env
APP_NAME="Orsi Szabo - Solution Focused Coaching"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://solutionfocus.es

# Database (use Laravel Cloud provided values)
DB_CONNECTION=mysql
DB_HOST=<provided-by-laravel-cloud>
DB_PORT=3306
DB_DATABASE=<provided-by-laravel-cloud>
DB_USERNAME=<provided-by-laravel-cloud>
DB_PASSWORD=<provided-by-laravel-cloud>

# Mail (configure with your SMTP provider)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@solutionfocus.es"
MAIL_FROM_NAME="Orsi Szabo"

# Session
SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database

# Logging
LOG_CHANNEL=stack
LOG_LEVEL=error
```

## Step 4: Initial Deployment

1. Click "Deploy" in Laravel Cloud
2. Wait for the build to complete
3. Monitor the deployment logs

## Step 5: Run Database Migrations

After first deployment, run these commands in Laravel Cloud terminal:

```bash
php artisan migrate --force
php artisan db:seed --force
```

## Step 6: Create Admin User

If you want a different admin user, run:

```bash
php artisan make:filament-user
```

Or keep the seeded user:
- Email: admin@solutionfocus.es
- Password: password (change immediately!)

## Step 7: Configure Domain

1. Go to "Domains" in Laravel Cloud
2. Add `solutionfocus.es`
3. Configure DNS records as instructed by Laravel Cloud:
   - Add CNAME or A record pointing to Laravel Cloud
4. Wait for DNS propagation (can take up to 48 hours)
5. Enable SSL certificate (automatic with Laravel Cloud)

## Step 8: Email Configuration

### Option 1: Gmail (for testing)

1. Enable 2FA on Gmail account
2. Generate App Password
3. Use in `MAIL_USERNAME` and `MAIL_PASSWORD`

### Option 2: SendGrid (recommended for production)

1. Sign up for SendGrid
2. Create API key
3. Configure:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=<your-sendgrid-api-key>
```

### Option 3: Mailgun

1. Sign up for Mailgun
2. Verify domain
3. Get SMTP credentials
4. Configure in environment variables

## Step 9: Post-Deployment

1. Visit https://solutionfocus.es
2. Verify homepage loads correctly
3. Login to admin panel: https://solutionfocus.es/admin
4. **Change default admin password immediately**
5. Test contact form
6. Check email delivery

## Step 10: Content Setup

1. Log in to admin panel
2. Review and edit the "Sobre Mí" page
3. Review and edit services
4. Review and edit testimonials
5. Update settings (contact info, etc.)

## Troubleshooting

### Issue: 500 Error after deployment

**Solution:**
- Check Laravel Cloud logs
- Ensure all environment variables are set
- Run `php artisan config:cache`
- Run `php artisan view:cache`

### Issue: Database connection failed

**Solution:**
- Verify database credentials in environment
- Check database is running in Laravel Cloud
- Ensure `DB_CONNECTION=mysql` is set

### Issue: Contact form not sending emails

**Solution:**
- Check SMTP credentials
- Verify `MAIL_FROM_ADDRESS` is set
- Test email with: `php artisan tinker` then `Mail::raw('Test', function($m) { $m->to('test@example.com')->subject('Test'); });`
- Check spam folder

### Issue: Admin panel shows blank page

**Solution:**
- Clear cache: `php artisan cache:clear`
- Rebuild assets: `npm run build`
- Check browser console for JavaScript errors

## Maintenance Commands

Run these in Laravel Cloud terminal as needed:

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Run migrations
php artisan migrate --force

# Rebuild assets (if needed)
npm run build
```

## Backup Strategy

Laravel Cloud handles automatic backups, but for extra safety:

1. Enable daily database backups in Laravel Cloud
2. Keep a local backup of uploaded images
3. Version control all code changes

## Monitoring

- Set up Laravel Cloud monitoring alerts
- Monitor email delivery rates
- Check error logs regularly
- Set up uptime monitoring (UptimeRobot, Pingdom, etc.)

## Security Checklist

- [x] HTTPS enabled (automatic with Laravel Cloud)
- [ ] Strong admin password set
- [ ] Database credentials secured
- [ ] SMTP credentials secured
- [ ] `APP_DEBUG=false` in production
- [ ] Regular updates to Laravel and dependencies

## Support

If you encounter issues:
1. Check Laravel Cloud documentation
2. Review application logs in Laravel Cloud
3. Contact Laravel Cloud support
4. Check Laravel community forums

## Success! 🎉

Your site should now be live at https://solutionfocus.es

Remember to:
- Change the default admin password
- Test all functionality
- Add real content through the CMS
- Configure email properly for the contact form

