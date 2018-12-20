var gulp = require('gulp');
var stylus = require('gulp-stylus');
var minifyCSS = require('gulp-csso');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');

gulp.task('css', function () {
   return gulp.src('css/*.styl')
      .pipe(stylus())
      .pipe(minifyCSS())
      .pipe(gulp.dest('dist/css'))
});

gulp.task('dependencies', function () {
   return gulp.src('js/lib/*.js')
      .pipe(sourcemaps.init())
      .pipe(concat('app.dev.js'))
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('dist/js'))
});

gulp.task('js', function () {
   return gulp.src('js/*.js')
      .pipe(sourcemaps.init())
      .pipe(concat('app.min.js'))
      .pipe(babel({
         presets: ['@babel/env']
      }))
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('dist/js'))
});

// gulp.task('default', function(){
//    gulp.watch([ 'html', 'css', 'js' ])
// });

gulp.task('default', function () {
   gulp.watch('css/*.styl', ['css']);
   gulp.watch('js/*.js', ['js']);
   gulp.watch('js/lib/*.js', ['dependencies']);
});