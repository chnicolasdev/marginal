var gulp = require ('gulp');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer')
var bs = require('browser-sync').create();
var plumberErrorHandler = {erroHandler: notify.onError({
  title:'Gulp',
  message: 'Error: <%= error.message %>'
})
};


// tarea default

gulp.task('sass', function(){
  gulp.src('./assets/sass/**/*.scss')
    .pipe(plumber(plumberErrorHandler))
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('./assets/css'))
    .pipe(bs.reload({stream: true}));
});

gulp.task('browser-sync', function(){
  bs.init({
    proxy: "http://localhost:8888/marginal",
    files: ["**/*.php"]

  });
});

gulp.task('watch', function(){
  gulp.watch('./assets/sass/**/*.scss', ['sass'])
});

gulp.task('watch', ['browser-sync'], function(){
  gulp.watch('./assets/sass/**/*.scss', ['sass']);
});

gulp.task('default',['sass','watch'])
