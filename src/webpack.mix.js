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
mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/svg/flag', 'public/svg/flag');

mix.copy('node_modules/@coreui/icons/sprites/', 'public/icons/sprites');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
    ])
    .js('resources/js/dashboard.js', 'public/js')
    .js('resources/js/carnets.js', 'public/js')
    .js('resources/js/clients.js', 'public/js')
    .js('resources/js/user_carnets.js', 'public/js')
    .copy('resources/views/vendor/datatables/i18n/pl.json', 'public/vendor/datatables/i18n')
    .copy('resources/views/vendor/datatables/i18n/en.json', 'public/vendor/datatables/i18n')
    .copy('vendor/proengsoft/laravel-jsvalidation/resources/views', 'resources/views/vendor/jsvalidation')
    .copy('vendor/proengsoft/laravel-jsvalidation/public', 'resources/js/vendor/jsvalidation')
    .sourceMaps()
    .extract();
