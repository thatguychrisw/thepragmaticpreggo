/**
 * 
 * Created by developer on 9/24/16.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var neat = require('node-refills').includePaths;

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            includePaths: ['styles'].concat(neat)
        }))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});

