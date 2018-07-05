var gulp       = require('gulp');
var minifycss  = require('gulp-minify-css')
var uglifyjs   = require('gulp-uglify')
var concat     = require('gulp-concat')
var rename     = require('gulp-rename')
var header     = require('gulp-header');
var less       = require('gulp-less');
var autoprefix = require('gulp-autoprefixer');

var paths = {
  less: ['src/less/lion.less'],
  javascripts: ['src/js/*.js']
};

// CSS Tasks - Concat, Minify
gulp.task('css',function(){
  return gulp.src(paths.less)
  .pipe(concat('style.less'))
  .pipe(less())
  .pipe(autoprefix({
    browsers: ['last 30 versions', '> 1%', 'ie 9'],
    cascade: true
  }))
  .pipe(concat('lion.css'))
  .pipe(gulp.dest('./dist'))
  .pipe(minifycss())
  .pipe(rename('lion.min.css'))
  .pipe(header('/* Lion Framework - Compiled on <%= new Date() %> */ \n'))
  .pipe(gulp.dest('./dist'))
  .pipe(gulp.dest('./docs/css'))
})

// JS Tasks - Uglify
gulp.task('js',function(){
  return gulp.src(['src/js/lion.js'])
  .pipe(gulp.dest('./dist'))
  .pipe(uglifyjs())
  .pipe(rename('lion.min.js'))
  .pipe(header('/* Lion Framework - Compiled on <%= new Date() %> */ \n'))
  .pipe(gulp.dest('./dist'))
  .pipe(gulp.dest('./docs/js'))
})

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['css', 'js']);

// Watch Task - Watch All CSS and JS Files
gulp.task('watch', function() {
  gulp.watch('src/less/**/**.*', ['css'])
  gulp.watch(paths.javascripts, ['js'])
});

