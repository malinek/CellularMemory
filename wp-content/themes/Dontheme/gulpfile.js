// Include the necessary modules.

var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	sass = require('gulp-sass');

// Configure Browsersync
gulp.task('browser-sync', function() {
	var files = [
		'./style.css',
		'./js/scripts.js',
		'./*.php'
	];

	// Initialize Browsersync with a PHP server
	browserSync.init(files, {
		proxy: "http://127.0.0.1/Don/wordpress/"
	});
});

gulp.task('sass', function () {
	return gulp.src('css/*.scss')
	.pipe(sass( {
		'outputStyle': 'compressed'
	}))
	.pipe(gulp.dest('./'))
	.pipe(browserSync.stream());
});

gulp.task('default', ['sass', 'browser-sync'], function () {
	gulp.watch('css/**/*.scss', ['sass']);
})

