var gulp        = require('gulp');
var config      = require('../config');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var watch       = require('gulp-watch');



gulp.task('watch', function (callback) {
  // Watch Sass Files
  watch([config.styles.folder_src], function() {
    gulp.start('styles');
  });

  // Watch JS Files
  watch(config.scripts.all_src, function() {
    gulp.start('scripts');
    reload();
  });

  // Watch Images Files
  watch(config.images.folder_src, function() {
    gulp.start('images');
    reload();
  });

  // Watch Fonts Files
  watch(config.images.folder_src, function() {
    gulp.start('fonts');
    reload();
  });

  // Watch IconFont Files
  watch(config.iconFont.folder_src, function() {
    gulp.start('iconFont');
    reload();
  });

  // Watch Templates Files
  watch(config.templates.folder_src, function() {
    reload();
  })

  // Watch Config Files
  watch(config.self, function() {
    gulp.start('styles', 'scripts');
    reload();
  })
});
