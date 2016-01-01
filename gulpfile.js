/*!
 * gulp
 * $ npm install gulp-ruby-sass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-notify gulp-rename gulp-livereload gulp-cache del --save-dev

  npm install --global gulp
  npm install --no-bin-links

  // Run all tasks...
  gulp 
  // Run all tasks and minify all CSS and JavaScript...
  gulp --production
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

//path
var paths = {
  blade: ['resources/views/**/*.blade.php'],

  styles: ['public/quickadmin/css/*.css'],
  scripts: ['public/quickadmin/js/*.js'],
  images: 'src/images/**/*',

  dist: ['resources/assets/**'],
  diststyles: ['resources/assets/css'],
  distscripts: ['resources/assets/js'],
  distimages: 'dist/images',
};

// Styles
gulp.task('styles', function() {
  return gulp.src('public/quickadmin/css/*.css')
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('resources/assets/css'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('resources/assets/css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

// Scripts
gulp.task('scripts', function() {
  return gulp.src('public/quickadmin/js/*.js')
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('resources/assets/js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('resources/assets/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function() {
  return gulp.src(paths.images)
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest(paths.dist_images))
    .pipe(notify({ message: 'Images task complete' }));
});

// Clean
gulp.task('clean', function() {
  return del([ 'resources/assets/css', 'resources/assets/js', 'dist/images']);
});

// Default task
gulp.task('default', ['clean'], function() {
// gulp.task('default', function() {
  gulp.start('styles');
});

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('public/quickadmin/css/*.css', ['styles']);

  // Watch .js files
  // gulp.watch(paths.scripts, ['scripts']);

  // Watch image files
  // gulp.watch('src/images/**/*', ['images']);

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch([paths.dist]).on('change', livereload.changed);

});