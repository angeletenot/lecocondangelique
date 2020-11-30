var gulp   = require('gulp');
var del    = require('del');
var config = require('../config');
var argv = require('yargs').argv;

gulp.task('clean-images', function(cb) {
  del([argv.deploy ? config.images.deploy_dest : config.images.dest], cb);
});

gulp.task('clean-iconfont', function(cb) {
  del([argv.deploy ? config.iconFont.deploy_dest : config.iconFont.dest], cb);
});

gulp.task('clean-deploy', function(cb) {
  del([config.deployFiles], cb);
})

gulp.task('clean-all', [
  'clean-deploy',
  'clean-images',
  'clean-iconfont'
]);
