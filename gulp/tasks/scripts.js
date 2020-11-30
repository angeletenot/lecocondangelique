var gulp                    = require('gulp');
var config                  = require('../config');
var plumber                 = require('gulp-plumber');
var notify                  = require('gulp-notify');
var concat                  = require('gulp-concat');
var argv                    = require('yargs').argv;
var gutil                   = require('gulp-util');
var uglify                  = require('gulp-uglify');

// TODO : Handle uglify on production
gulp.task('scripts', function(){
  return gulp.src([config.scripts.vendor_src, config.scripts.custom_src, config.scripts.folder_src])
    .pipe(plumber({
      errorHandler: notify.onError('Scripts Error: <%= error.message %>')
    }))
    .pipe(concat('scripts.js'))
    .pipe(argv.deploy ? uglify() : gutil.noop())
    .pipe(gulp.dest(argv.deploy ? config.scripts.deploy_dest : config.scripts.dest));
});
