const mix = require('laravel-mix');
mix.setPublicPath('dist');
mix.setResourceRoot('../');
mix.autoload({
   jquery: ['$', 'jQuery', 'window.jQuery']
});
mix.copyDirectory('resources/assets/images', 'dist/images');
mix.js('resources/assets/js/app.js', 'dist/js')
   .sass('resources/assets/scss/app.scss', 'dist/css')
   .extract()
   .version();
