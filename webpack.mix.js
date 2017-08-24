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
   .sass('resources/assets/sass/app.scss', 'public/css')

mix.styles([
    'resources/assets/css/master.css',
    'resources/assets/css/task.css',
], 'public/css/master.css');

mix.scripts([
    'resources/assets/js/error.js',
    'resources/assets/js/form.js',
], 'public/js/master.js')

mix.js([
    'resources/assets/js/task.js'
], 'public/js/task.js')