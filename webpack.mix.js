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

mix.js([
        'resources/js/app.js',
        'resources/plugins/tether/js/tether.min.js',
        'resources/plugins/raty/jquery.raty-fa.js',
        'resources/plugins/bootstrap/dist/js/popper.min.js',
        'resources/plugins/bootstrap/dist/js/bootstrap.min.js',
        'resources/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js',
        'resources/plugins/slick-carousel/slick/slick.min.js',
        'resources/plugins/jquery-nice-select/js/jquery.nice-select.min.js',
        'resources/plugins/fancybox/jquery.fancybox.pack.js',
        'resources/plugins/smoothscroll/SmoothScroll.min.js'
    ], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
            'resources/plugins/jquery-ui/jquery-ui.min.css',
            'resources/plugins/slick-carousel/slick/slick.css',
            'resources/plugins/slick-carousel/slick/slick-theme.css',
            'resources/plugins/fancybox/jquery.fancybox.pack.css',
            'resources/plugins/jquery-nice-select/css/nice-select.css',
            'resources/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css',
            'resources/css/style.css',
        ], 'public/css/all.css');
    
