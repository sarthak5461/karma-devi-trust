# Upload this Project to WordPress (Step-by-Step)

This repository is a **static website** (`index.html`, `about.html`, `programs.html`, etc.).
The cleanest way to run it on WordPress is to package it as a **custom theme**.

---

## 1) Prepare theme folder structure

On your machine, create this structure:

```text
karma-devi-trust-theme/
  style.css
  index.php
  functions.php
  header.php
  footer.php
  front-page.php
  page-about.php
  page-programs.php
  page-donate.php
  page-register.php
  page-contact.php
  css/
  js/
```

Copy these from this repo into the theme:

- `css/style.css` -> `karma-devi-trust-theme/css/style.css`
- `js/main.js` -> `karma-devi-trust-theme/js/main.js`

---

## 2) Add minimum WordPress theme files

### `style.css` (theme metadata)

```css
/*
Theme Name: Karma Devi Trust
Theme URI: https://example.com
Author: Karma Devi Trust
Description: WordPress theme generated from static Karma Devi Trust website.
Version: 1.0.0
Text Domain: karma-devi-trust
*/
```

### `functions.php` (load CSS/JS)

```php
<?php
function kdt_enqueue_assets() {
    wp_enqueue_style('kdt-theme-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style(
        'kdt-material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0',
        array(),
        null
    );
    wp_enqueue_script('kdt-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'kdt_enqueue_assets');
```

### `index.php`

```php
<?php get_header(); ?>
<main class="section">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
```

> Then move HTML sections from each static file into the corresponding template (`front-page.php`, `page-about.php`, etc.) between `get_header()` and `get_footer()`.

---

## 3) Convert internal links

In copied template files, replace:

- `href="index.html"` with `href="<?php echo esc_url(home_url('/')); ?>"`
- `href="about.html"` with `href="<?php echo esc_url(home_url('/about/')); ?>"`
- `href="programs.html"` with `href="<?php echo esc_url(home_url('/programs/')); ?>"`
- `href="donate.html"` with `href="<?php echo esc_url(home_url('/donate/')); ?>"`
- `href="register.html"` with `href="<?php echo esc_url(home_url('/register/')); ?>"`
- `href="contact.html"` with `href="<?php echo esc_url(home_url('/contact/')); ?>"`

---

## 4) Zip and upload to WordPress

1. Zip the folder `karma-devi-trust-theme`.
2. In WordPress Admin, go to **Appearance -> Themes -> Add New -> Upload Theme**.
3. Upload the ZIP and click **Activate**.
4. Go to **Settings -> Reading** and set:
   - **Your homepage displays** -> **A static page**
   - Select page `Home` as Homepage.

---

## 5) Create matching pages in WordPress

Create these pages in **Pages -> Add New**:

- Home (slug: `home`) or use front page template
- About (`about`)
- Programs (`programs`)
- Donate (`donate`)
- Register (`register`)
- Contact (`contact`)

If you created `page-about.php`, `page-programs.php`, etc., WordPress will auto-apply them by slug.

---

## 6) Recommended plugin setup (optional)

- **WPForms** (for contact/register forms)
- **UpdraftPlus** (backups)
- **LiteSpeed Cache** or **WP Super Cache** (performance)
- **Wordfence** (security)

---

## 7) Quick deployment checklist

- [ ] Theme uploads and activates successfully
- [ ] CSS and JS load without 404
- [ ] All navbar links open WordPress pages (not `.html`)
- [ ] Mobile menu works
- [ ] Contact and register forms submit properly
- [ ] Footer links and phone/email links work

---

## Need a done-for-you package?

If you want, I can generate a complete ready-to-upload WordPress theme directly in this repo (with all current pages already converted), so you only need to upload one ZIP in WordPress.
