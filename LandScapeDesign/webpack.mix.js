const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .styles([
        'resources/css/header.css',
        'resources/css/footer.css',
        'resources/css/reset_fonts.css',
    ], 'public/css/all.css')
    .styles([
        'resources/css/index.css',
    ], 'public/css/index.css')
    .styles([
        'resources/css/about_us.css',
    ], 'public/css/about_us.css')
    .styles([
        'resources/css/contacts.css',
    ], 'public/css/contacts.css')
    .styles([
        'resources/css/portfolio.css',
    ], 'public/css/portfolio.css')
    .styles([
        'resources/css/form.css',
    ], 'public/css/form.css');
