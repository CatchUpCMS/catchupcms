var gulp = require('gulp');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

// load the config class & boot the methods
config = require('../../resources/assets/js/elixir-config');
config.setConfig(elixir);

elixir(function(mix) {
    // sort the scripts out
    mix.scripts([
        'assets/vendor/jquery/dist/jquery.js',
        'assets/vendor/bootstrap/dist/js/bootstrap.js',
        '../../../resources/assets/js/init.js',
        'assets/vendor/jquery-ujs/src/rails.js',
        'assets/js/jquery.metisMenu.js',
        'assets/js/sb-admin.js'
    ], null, 'resources');

    // copy the fonts over
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'assets/fonts')
    .copy('resources/assets/vendor/bootstrap/fonts', 'assets/fonts');

    // do the style stuff, and send to browser everytime we change it
    mix.less('app.less', 'assets/css/app.css')
        .exec('php ../../artisan theme:publish ' + themeInfo.name, '**/*.less');

});
