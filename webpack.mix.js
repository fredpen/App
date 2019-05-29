const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/css/app.min.css',
    'resources/css/buttons.bootstrap4.css',
    'resources/css/icons.min.css',
    'resources/css/responsive.bootstrap4.css',
    'resources/css/custom.css'

], 'public/css/all.css');

mix.scripts([
   'resources/js/app.min.js',
    'resources/js/buttons.html5.min.js',
    'resources/js/responsive.bootstrap4.js',
    'resources/js/custom.js',
    'resources/js/jquery-ui.min.js'

], 'public/js/all.js');
