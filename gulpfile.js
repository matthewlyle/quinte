var gulp = require('gulp'),
	plugins = require('gulp-load-plugins')({ camelize: true });

gulp.task('styles', function() {
    return gulp.src('sass/style.scss')
      .pipe(plugins.sass({outputStyle: 'compressed'}).on('error', plugins.sass.logError))
      .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch('sass/*.scss', ['styles']);
	//gulp.watch('_assets/img/**/*', ['img']);
});

gulp.task('default', ['watch']);
