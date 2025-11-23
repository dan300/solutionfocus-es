# CMS Usage Guide

This guide explains how to use the Filament admin panel to manage content on solutionfocus.es.

## Accessing the Admin Panel

1. Go to: https://solutionfocus.es/admin (or http://127.0.0.1:8000/admin locally)
2. Login with your credentials
3. Default credentials (change immediately!):
   - Email: admin@solutionfocus.es
   - Password: password

## Managing Pages

Pages are used for static content like "Sobre Mí" (About Me), terms of service, etc.

### Creating a New Page

1. Click "Pages" in the sidebar
2. Click "Create"
3. Fill in the required fields:
   - **Title**: The page title (e.g., "Sobre Mí")
   - **Slug**: URL-friendly version (auto-generated from title)
   - **Content**: Rich text editor for your content
   - **Published**: Toggle to make the page visible
   - **Order**: Display order (lower numbers appear first)

### SEO Settings

Expand the "SEO" section to add:
- **Meta Title**: Title for search engines (50-60 characters)
- **Meta Description**: Description for search engines (150-160 characters)
- **OG Image**: Social media share image

### Viewing Your Page

After publishing, your page will be available at:
- https://solutionfocus.es/your-slug

## Managing Services

Services are coaching offerings displayed on the Services page.

### Creating a Service

1. Click "Services" in the sidebar
2. Click "Create"
3. Fill in the details:
   - **Title**: Service name (e.g., "Coaching Individual")
   - **Slug**: URL identifier
   - **Description**: Short description (shown in cards)
   - **Long Description**: Detailed information
   - **Duration**: Session length (e.g., "60 minutos")
   - **Price**: Cost (e.g., "€80")
   - **Icon**: Heroicon name (optional)
   - **Featured**: Show on homepage
   - **Published**: Make visible
   - **Order**: Display order

### Best Practices

- Use clear, concise titles
- Keep descriptions under 150 characters for card display
- Set featured services to appear on the homepage
- Use order numbers (1, 2, 3) to control display sequence

## Managing Testimonials

Testimonials build trust and showcase client satisfaction.

### Adding a Testimonial

1. Click "Testimonials" in the sidebar
2. Click "Create"
3. Fill in:
   - **Client Name**: Full name
   - **Client Title**: Job/role (optional)
   - **Client Photo**: Upload image (optional)
   - **Content**: The testimonial text
   - **Rating**: 1-5 stars
   - **Featured**: Show on homepage
   - **Published**: Make visible
   - **Order**: Display order

### Tips for Great Testimonials

- Keep testimonials authentic and specific
- Include client's role/title for credibility
- Featured testimonials appear on the homepage
- Use high-quality photos (square format works best)

## Managing Settings

Site-wide settings like contact information.

### Editing Settings

1. Click "Settings" in the sidebar
2. Find the setting you want to edit
3. Click the edit icon
4. Update the value
5. Save

### Common Settings

- **site_name**: Website title
- **contact_email**: Primary contact email
- **phone**: Phone number
- **address**: Business address

### Adding New Settings

1. Click "Create"
2. Enter:
   - **Key**: Unique identifier (e.g., "social_facebook")
   - **Value**: The setting value
   - **Type**: text, email, number, etc.
   - **Description**: What this setting controls

## Rich Text Editor Tips

The content editor supports:

### Formatting
- Bold, italic, underline
- Headings (H1, H2, H3)
- Lists (bulleted and numbered)
- Links
- Blockquotes

### Images
1. Click the image icon
2. Upload or select an image
3. Add alt text for accessibility
4. Adjust size if needed

### Links
1. Select text
2. Click link icon
3. Enter URL
4. Choose to open in new tab (optional)

### Best Practices
- Use headings to structure content
- Keep paragraphs short (3-4 sentences)
- Add alt text to all images
- Use lists for easy scanning

## Homepage Management

The homepage displays:
1. **Hero Section**: Hardcoded in template
2. **Services Preview**: First 3 published services (by order)
3. **Testimonials**: All featured testimonials
4. **CTA Section**: Hardcoded call-to-action

To update homepage services:
- Edit services and set order (1, 2, 3 for top three)
- Toggle "Published" to show/hide

To update homepage testimonials:
- Edit testimonials and check "Featured"
- Toggle "Published" to show/hide

## Contact Form

The contact form is hardcoded but can be configured:

### Email Settings
Set in environment variables (Laravel Cloud):
- `MAIL_FROM_ADDRESS`: Where form submissions go
- `MAIL_FROM_NAME`: Sender name

### Form Fields
- Name (required)
- Email (required)
- Phone (optional)
- Message (required)

## Common Tasks

### Updating Contact Information

1. Go to Settings
2. Edit `contact_email`, `phone`, `address`
3. Also update footer by editing `resources/views/components/footer.blade.php`

### Adding a New Service

1. Go to Services → Create
2. Fill in all fields
3. Set order number (next available)
4. Check "Featured" to show on homepage
5. Check "Published"
6. Save

### Hiding a Page Temporarily

1. Go to Pages
2. Find the page
3. Click edit
4. Uncheck "Published"
5. Save

### Reordering Services

1. Go to Services
2. Edit each service
3. Change the "Order" field
4. Lower numbers appear first

## Content Guidelines

### Writing for Web

- Use short paragraphs (3-4 sentences)
- Start with the most important information
- Use headings to break up content
- Include calls-to-action
- Write in a conversational tone

### SEO Best Practices

- Include relevant keywords naturally
- Write unique meta descriptions for each page
- Use descriptive page titles
- Add alt text to images
- Keep URLs short and descriptive

### Image Guidelines

- Preferred format: JPG or PNG
- Max file size: 2MB
- Recommended dimensions:
  - Hero images: 1920x1080px
  - Service icons: 512x512px
  - Testimonial photos: 400x400px (square)
  - OG images: 1200x630px

## Troubleshooting

### Content Not Showing

- Check "Published" is toggled ON
- Clear browser cache
- Verify order number is set correctly

### Images Not Displaying

- Check file size (max 2MB)
- Verify file format (JPG, PNG, GIF)
- Check file permissions

### Changes Not Appearing

- Clear cache (ask developer)
- Check if published
- Verify you're viewing the correct page

## Getting Help

If you need assistance:
1. Check this guide first
2. Contact your developer
3. Filament documentation: https://filamentphp.com

## Quick Reference

### Keyboard Shortcuts (in editor)
- `Ctrl/Cmd + B`: Bold
- `Ctrl/Cmd + I`: Italic
- `Ctrl/Cmd + K`: Insert link
- `Ctrl/Cmd + Z`: Undo
- `Ctrl/Cmd + Shift + Z`: Redo

### Display Order Examples
- Homepage services: 1, 2, 3 (first three will show)
- All services page: All published, ordered by number
- Featured testimonials: All with "Featured" checked

## Maintaining Your Website

### Weekly Tasks
- Check for new testimonials to add
- Review contact form submissions
- Update any outdated service information

### Monthly Tasks
- Review all page content for accuracy
- Update seasonal information
- Check for broken links
- Review and respond to contact form messages

### As Needed
- Add new services
- Update pricing
- Add testimonials from satisfied clients
- Create new pages for special programs/events

---

**Remember**: Always preview your changes before publishing, and keep a backup of important content!

