var gulp = require('gulp');

  minifycss = require('gulp-minify-css')
  uglifyjs  = require('gulp-uglify')
  concat    = require('gulp-concat')
  rename    = require('gulp-rename')
  header    = require('gulp-header');

  var paths = {
  stylesheets: ['src/css/*.css'],
  javascripts: ['src/js/*.js']
};

// CSS Tasks - Concat, Minify
gulp.task('css',function(){
  return gulp.src(['src/css/info.css', 'src/css/reset.css', 'src/css/grid.css', 'src/css/typography.css', 'src/css/navigation.css', 'src/css/buttons.css', 'src/css/forms.css', 'src/css/tables.css', 'src/css/alerts.css', 'src/css/lists.css', 'src/css/utilities.css', 'src/css/*.css'])
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
  gulp.watch(paths.stylesheets, ['css'])
  gulp.watch(paths.javascripts, ['js'])
});

