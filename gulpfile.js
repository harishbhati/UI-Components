/* gulpfile.js */
var gulp = require('gulp');
var sass = require('gulp-sass');


// compile scss
gulp.task('scss', function () {
  return gulp.src(['src/scss/*.scss','src/scss/**/*.scss'])
  .pipe(sass())
  .pipe(gulp.dest('dist/css'));
});

gulp.task( 'watch', ['scss'], function () {
    var sassWatcher = gulp.watch(['src/scss/*.scss','src/scss/**/*.scss'], ['scss']);
});
gulp.task('default', ['scss', 'watch' ])