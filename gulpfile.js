'use strict';

var gulp = require('gulp');
var phpMinify = require('@aquafadas/gulp-php-minify');

gulp.task('serve', function() {
	gulp.src('app/*.php', {read: false})
		.pipe(phpMinify({binary: 'C:\\wamp64\\bin\\php\\php7.0.10\\php.exe'}))
		.pipe(gulp.dest('dist'));
});