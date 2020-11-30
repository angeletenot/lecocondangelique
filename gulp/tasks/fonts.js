var gulp                    = require('gulp');
var config                  = require('../config').fonts;
var argv                    = require('yargs').argv;


gulp.task('fonts', function() {
  return gulp.src(config.folder_src)
  .pipe(gulp.dest(argv.deploy ? config.deploy_dest : config.dest))
})