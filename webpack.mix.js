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

mix.options({processCssUrls: true,})
    .scripts('resources/assets/js/app.js', 'public/assets/js/app.js')
    .js('resources/assets/js/admin.js', 'public/assets/js/admin.js')
    .js('resources/assets/js/tilt.jquery.js', 'public/assets/js/tilt.jquery.js')
    .js('resources/assets/js/developer.js', 'public/assets/js/developer.js')
    .js('resources/assets/js/cv.js', 'public/assets/js/cv.js')
    .postCss('resources/assets/scss/app.css', 'public/assets/css', [
        require("tailwindcss"),
    ])
    .sass('resources/assets/scss/custom.scss', 'public/assets/css')
    // .copy('resources/assets/files', 'public/assets/files')
    .version()
    .disableNotifications()
    .react();
