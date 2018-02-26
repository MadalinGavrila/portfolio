let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([

    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/fontawesome-all.min.css'

], 'public/css/libs.css');

mix.styles([

    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/fontawesome-all.min.css',
    'resources/assets/css/libs/sb-admin.css'

], 'public/css/libs-admin.css');

mix.scripts([

    'resources/assets/js/libs/jquery-3.3.1.min.js',
    'resources/assets/js/libs/bootstrap.min.js'

], 'public/js/libs.js');