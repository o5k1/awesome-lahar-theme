var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var runSequence = require('run-sequence');
var del = require('del');
var ftp = require('vinyl-ftp');
var config = require('./env').prod;

// Set the browser that you want to support
const AUTOPREFIXER_BROWSERS = [
  'ie >= 10',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];

// Clean output directory
gulp.task('clean', function () {
  del(['dist'])
});

gulp.task('default', ['clean'], function () {
  runSequence(
    'styles',
    'scripts',
    'images',
    'php',
    'screenshot',
    'deploy'
  );
});

// Gulp task to minify CSS files
gulp.task('styles', function () {
  return gulp.src(['./css/reset.css', './css/hamburgers.css', './css/awesome-lahar.css'])
  // Auto-prefix css styles for cross browser compatibility
    .pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
    // Minify the file
    .pipe(csso())
    // Output
    .pipe(gulp.dest('./dist/css'))
});

// Gulp task to minify JavaScript files
gulp.task('scripts', function () {
  return gulp.src('./js/**/*.js')
  // Minify the file
    .pipe(uglify())
    // Output
    .pipe(gulp.dest('./dist/js'))
});

// Gulp task to move images
gulp.task('images', function () {
  return gulp.src('./img/**/*.*')
  // Output
    .pipe(gulp.dest('./dist/img'))
});

// Gulp task to move screenshot image
gulp.task('screenshot', function () {
  return gulp.src('./screenshot.png')
  // Output
    .pipe(gulp.dest('./dist'))
});

// Gulp task to move PHP files
gulp.task('php', function () {
  return gulp.src('./**/*.php')
  // Output
    .pipe(gulp.dest('./dist'))
});

gulp.task('deploy', function () {

  var conn = ftp.create({
    host: config.host,
    user: config.user,
    password: config.password
  });

  var globs = ['**'];
  var dest = config.dest;

  // turn off buffering in gulp.src for best performance
  return gulp.src(globs, {base: './dist', cwd: './dist', buffer: false})
    .pipe(conn.dest(dest));
});