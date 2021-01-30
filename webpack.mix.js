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

mix.copy('node_modules/select2/dist/js/select2.full.min.js', 'public/js/select2.min.js');
mix.copy('node_modules/select2/dist/css/select2.min.css', 'public/css/select2.min.css');
mix.copy('node_modules/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css', 'public/css/select2-bootstrap4.min.css')

// using datatables
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/dataTables.bootstrap4.min.css');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
