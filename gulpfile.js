var gulp       = require('gulp');
var minifycss  = require('gulp-minify-css')
var uglifyjs   = require('gulp-uglify')
var concat     = require('gulp-concat')
var rename     = require('gulp-rename')
var header     = require('gulp-header');
var less       = require('gulp-less');
var autoprefix = require('gulp-autoprefixer');

var paths = {
  less: ['src/less/vars.less', 'src/less/info.less', 'src/less/normalize.less', 'src/less/grid.less', 'src/less/typography.less', 'src/less/*.less'],
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
  .pipe(gulp.dest('./'))
  .pipe(minifycss())
  .pipe(rename('lion.min.css'))
  .pipe(header('/* Lion Framework - Compiled on <%= new Date() %> */ \n'))
  .pipe(gulp.dest('./'))
})

// JS Tasks - Uglify
gulp.task('js',function(){
  return gulp.src(['src/js/lion.js'])
  .pipe(gulp.dest('./'))
  .pipe(uglifyjs())
  .pipe(rename('lion.min.js'))
  .pipe(header('/* Lion Framework - Compiled on <%= new Date() %> */ \n'))
  .pipe(gulp.dest('./'))
})

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['css', 'js']);

// Watch Task - Watch All CSS and JS Files
gulp.task('watch', function() {
  gulp.watch(paths.less, ['css'])
  gulp.watch(paths.javascripts, ['js'])
});

