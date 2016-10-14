var gulp = require('gulp')
    sass = require('gulp-sass')
    plumber = require('gulp-plumber')
    bourbon = require('node-bourbon').includePaths
    neat = require('node-neat').includePaths;

gulp.task('sass', function(){
  gulp.src('sass/**/*.sass')
  .pipe(plumber({
    errorHandler: function(error){
      console.log(error.message);
      this.emit('end');
    }
  }))
  .pipe(sass({
    css: 'css',
    sass: 'sass',
    style: 'compressed',
    includePaths: ['sass'].concat(bourbon).concat(neat)
  }))
  .pipe(gulp.dest('css'))
});

gulp.task('watch', ['sass'], function(){
  gulp.watch('sass/**/*.sass', ['sass']);
});

gulp.task('default', ['watch']);
