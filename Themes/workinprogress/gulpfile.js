var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

// load the config class & boot the methods
config = require('../../resources/assets/js/elixir-config');
config.setConfig(elixir);
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // sort the scripts out
    mix.scripts([
        'assets/vendor/jquery/dist/jquery.js',
        'assets/vendor/bootstrap/dist/js/bootstrap.js',
        '../../../resources/assets/js/init.js'
    ], null, 'assets/css/app.js')
        .exec('php ../../artisan theme:publish ' + themeInfo.name+ ' --force', '**/*.js');

    // copy the fonts over
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'assets/fonts')
    .copy('resources/assets/vendor/bootstrap/fonts', 'assets/fonts');

    // do the style stuff, and send to browser everytime we change it
    mix.less('app.less', 'assets/css/app.css')
        .exec('php ../../artisan theme:publish ' + themeInfo.name, '**/*.less');

});
