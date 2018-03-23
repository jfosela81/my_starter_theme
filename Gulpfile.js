var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var include = require('gulp-include');
var minify = require('gulp-minify');

gulp.task('default', ['styles']);

gulp.task('styles', function () {
    return gulp.src('./development/styles/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCss({
            keepSpecialComments: 1
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('scripts', function() {
    gulp.src(['./development/js/scripts.js'])
        .pipe( include() )
        .pipe( minify() )
        .pipe( gulp.dest("./") );
});

gulp.task('watch', function () {
    gulp.watch('./development/styles/*.scss', ['styles'] );
    gulp.watch('./development/js/*.js', ['scripts'] );
});

// Optimización de imágenes
/*
var imagemin = require('gulp-imagemin'); // modulo minimo requerido
var pngquant = require('imagemin-pngquant');
var imageminJpegoptim = require('imagemin-jpegoptim');
gulp.task('images', function() {
    return gulp.src(['img/*.png','img/*.jpg','img/*.jpeg'])
        .pipe(imagemin({
            progressive: true,
            use: [pngquant(),imageminJpegoptim()]
        }))
        .pipe(gulp.dest('img/optimized'));
});
    */
