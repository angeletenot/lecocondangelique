var gulp        = require('gulp');
var runSequence = require('run-sequence');

gulp.task('build', function(callback){
  runSequence(
    'clean-all',
    'iconFont',
    ['styles', 'scripts', 'images', 'fonts'],
    callback
  )
});
