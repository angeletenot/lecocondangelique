var gulp                    = require('gulp');
var sass                    = require('gulp-sass');
var config                  = require('../config').styles;
var autoprefixer            = require('gulp-autoprefixer');
var replace                 = require('gulp-replace');
var rename                  = require('gulp-rename');
var gutil                   = require('gulp-util');
var csso                    = require('gulp-csso');
var plumber                 = require('gulp-plumber');
var notify                  = require('gulp-notify');
var concat                  = require('gulp-concat');
var utils                   = require('./utils');
var argv                    = require('yargs').argv;
var sourcemaps              = require('gulp-sourcemaps');


// Handle Default Syles
gulp.task('styles', function () {
  return gulp.src(config.main_src)
    .pipe(sourcemaps.init())
    .pipe(plumber({
      errorHandler: notify.onError('SASS Error: <%= error.message %>')
    }))
    .pipe(sass(config.settings))
    .pipe(autoprefixer({browsers: ['last 2 versions', '> 1%']}))
    .pipe(rename(function(path) {
      path.basename = 'style';
    }))
    .pipe(argv.deploy ? csso() : gutil.noop())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(argv.deploy ? config.deploy_dest : config.dest))
});
