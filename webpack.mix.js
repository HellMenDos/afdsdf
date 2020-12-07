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
mix.js('resources/js/theme.fe2c17cd.js', 'public/js')
mix.js('resources/js/sliders-init.1db6fb07.js', 'public/js')
mix.js('resources/js/countdown.782bfd78.js', 'public/js')
mix.js('resources/js/custom-scrollbar-init.f148089f.js', 'public/js')

    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
