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

// mix.webpackConfig({
//     devtool: "inline-source-map"
// });


mix.js('src/js/app.js', '/build/js/')
    .js('src/js/pages/home.js', '/build/js/')
    
    .sass('src/scss/app.scss', './build/css/')
    .sass('src/scss/pages/home.scss', './build/css/')
    .sourceMaps(true, 'source-map');
    
