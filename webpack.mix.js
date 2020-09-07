const mix = require('laravel-mix');
require('laravel-mix-purgecss');
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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.combine([
    'resources/js/jquery-3.1.1.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.js',
    'resources/js/plugins/metisMenu/jquery.metisMenu.js',
    'resources/js/plugins/slimscroll/jquery.slimscroll.min.js',
    'resources/js/inspinia.js',
    'resources/js/plugins/pace/pace.min.js',
    'resources/js/plugins/toastr/toastr.min.js',
], 'public/js/app.js', 'public/js');


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/animate.css',
    'resources/css/style.css',
    'resources/css/plugins/toastr/toastr.min.css',
], 'public/css/app.css').purgeCss();
