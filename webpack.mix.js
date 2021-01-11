const mix = require('laravel-mix');
const minifier = require('minifier');

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

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/common.scss', 'public/css')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts', 'public/fonts')

mix.then(() => {
    minifier.minify('public/css/app.css')
});
mix.then(() => {
    minifier.minify('public/css/header.css')
});
mix.then(() => {
    minifier.minify('public/css/common.css')
});
