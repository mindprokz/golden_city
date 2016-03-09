'use strict'

const gulp = require('gulp'),
	minifyCss = require('gulp-minify-css'),
	autoprefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-ruby-sass'),
	livereload = require('gulp-livereload'),
	rename = require('gulp-rename'),
    bs = require("browser-sync").create(),
    babel = require('gulp-babel'); 

gulp.task('Server Start', function(){
	bs.init({
	    server : './'
	})
	bs.watch('*.html').on('change', bs.reload);
	bs.watch('css/style.min.css').on('change', bs.reload);
	bs.watch('js/*.js').on('change', bs.reload);
});

// task for change html
gulp.task('html',function(){
	gulp.src('index.html');
});

gulp.task('sass', function () {
  return sass('css/style.sass')
    .on('error', sass.logError)
    .pipe(autoprefixer('last 10 version'))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('css'));
});

// task for css
gulp.task('css', function () {
	gulp.src('css/style.css')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer('last 10 version'))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('css/'));
});

// task for JS 
gulp.task('js', function() {
  return gulp.src('js/common.js')
    .pipe(uglify())
    .pipe(rename('common.min.js'))
    .pipe(gulp.dest('js/'));
});

gulp.task('ecma2015', function() {
  return gulp.src('js/controller.js')
    //.pipe(babel({presets: ['es2015']}))
    .pipe(uglify())
    .pipe(rename('controller.min.js'))
    .pipe(gulp.dest('js/'));
});

// taks for watch change files
gulp.task('watch', function(){
	gulp.watch('css/style.sass', ['sass']);
	gulp.watch('index.html', ['html']);
	gulp.watch('js/common.js', ['js']);
    gulp.watch('js/controller.js', ['ecma2015']);
});

// default task
gulp.task('default', ['html', 'sass', 'js', 'ecma2015', 'watch']);