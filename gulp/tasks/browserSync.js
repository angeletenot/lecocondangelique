var browserSync = require('browser-sync');
var gulp        = require('gulp');
var config      = require('../config').browserSync;
var reload      = browserSync.reload;

gulp.task('browserSync', function () {
  browserSync(config);
});

gulp.task('browserSync-reload', function () {
  browserSync.reload();
});

