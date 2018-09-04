// const elixir = require('laravel-elixir');
//
// require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir((mix) => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

var gulp = require("gulp"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    browserSync  = require("browser-sync"),
    webpack      = require("webpack-stream");

gulp.task("sass", function(){
    return gulp.src("./resource/assets/sass/**/*.scss")
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./public/assets/css"))
})

gulp.task("serve", function(){
    browserSync.init({
        server:{
            baseDir: "./public/"
        }
    })


    gulp.watch("./resource/assets/sass/**/*.scss", ['sass'])
    gulp.watch("./public/assets/css/**/*.css").on("change", browserSync.reload)
    gulp.watch("./resources/views/master.blade.php").on("change", browserSync.reload)
})
