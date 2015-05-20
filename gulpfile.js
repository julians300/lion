var gulp = require('gulp');

  minifycss = require('gulp-minify-css'),
  concat    = require('gulp-concat')
  rename    = require('gulp-rename')
  header    = require('gulp-header');

  var paths = {
  stylesheets: ['src/css/*.css']
};

// CSS Tasks - Concat, Minify
gulp.task('css',function(){
  return gulp.src(['src/css/info.css', 'src/css/reset.css', 'src/css/*.css'])
  .pipe(concat('lion.css'))
  .pipe(gulp.dest('./'))
  .pipe(minifycss())
  .pipe(rename('lion.min.css'))
  .pipe(header('/* Lion Framework - Compiled on <%= new Date() %> */ \n'))
  .pipe(gulp.dest('./'))
})

// Watch Task - Watch All CSS Files
gulp.task('watch', function() {
  gulp.watch(paths.stylesheets, ['css'])
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch', 'css']);