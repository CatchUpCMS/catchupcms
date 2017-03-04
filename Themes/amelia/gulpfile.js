var gulp = require('gulp');
var shell = require('gulp-shell');
var less = require('gulp-less');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

elixir.extend('themePublish', function() {
    gulp.task('themePublish', ['less', 'scripts'], function() {
        gulp.src('').pipe(shell('php ../../artisan theme:publish '+themeInfo.name));
    });

    this.registerWatcher('themePublish', '**/*.less');

    return this.queueTask('themePublish');
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.publicDir = '../../public';
elixir.config.cssOutput = 'assets/css';
elixir.config.jsOutput = 'assets/js';

elixir(function(mix) {
    mix.less('app.less');
    mix.scripts([
        'assets/vendor/jquery/dist/jquery.js',
        'assets/vendor/bootstrap/dist/js/bootstrap.js',
        'assets/js/app/application.js'
    ], null, 'resources');
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'assets/fonts');
    mix.copy('resources/assets/vendor/bootstrap/fonts', 'assets/fonts');
    mix.copy('resources/assets/fonts/', 'assets/fonts');
    mix.copy('resources/assets/images', 'assets/images');
    mix.themePublish();
});
