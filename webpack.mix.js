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
    .sass('resources/sass/slider.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/category.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/product.scss', 'public/css')
    .sass('resources/sass/about.scss', 'public/css')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts', 'public/fonts')
    .copy('resources/js/slick.min.js', 'public/js')
    .copy('resources/js/jquery.slicknav.min.js', 'public/js')
    .copy('resources/js/jquery-2.2.4.min.js', 'public/js')
    .copy('resources/js/owl.carousel.min.js', 'public/js')

mix.then(() => {
    minifier.minify('public/css/app.css')
});
mix.then(() => {
    minifier.minify('public/css/header.css')
});
mix.then(() => {
    minifier.minify('public/css/footer.css')
});
mix.then(() => {
    minifier.minify('public/css/home.css')
});
mix.then(() => {
    minifier.minify('public/css/common.css')
});
mix.then(() => {
    minifier.minify('public/css/about.css')
});
mix.then(() => {
    minifier.minify('public/css/product.css')
});
mix.then(() => {
    minifier.minify('public/css/category.css')
});
mix.then(() => {
    minifier.minify('public/css/slider.css')
});
mix.then(() => {
    minifier.minify('public/js/app.js')
});

