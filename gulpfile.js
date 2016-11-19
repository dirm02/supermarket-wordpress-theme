var gulp = require('gulp');
var livereload = require('gulp-livereload');

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./*.php', livereload.reload);
  gulp.watch('./*.css', livereload.reload);
});

gulp.task('default', ['watch']);
