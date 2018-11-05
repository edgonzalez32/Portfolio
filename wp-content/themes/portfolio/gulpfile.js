var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano'); 
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var rename = require('gulp-rename');

gulp.task('default', function() {

});

//compile sass to css
gulp.task('sass', function () {
	return gulp.src('./dev/sass/materialize.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./dist/css/'))
		.pipe(cssnano())
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('./dist/css/'))
		.pipe(livereload());
});

//concat and minify necessary js 
gulp.task('scripts', function() {
	return gulp.src('./dev/js/*.js')
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('./dist/js/'))
		.pipe(rename('scripts.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./dist/js/'))
		.pipe(livereload());
});

//livereload any php edits
gulp.task('php', function() {
	gulp.src('./*.php')
		.pipe(livereload());
});

gulp.task('watch', function () {
	livereload.listen();
	gulp.watch(['./dev/sass/*.scss', './dev/sass/**/*.scss'], ['sass'] );
	gulp.watch(['css/*.css'], ['css']);
	gulp.watch(['./dev/js/*.js', './dev/js/*/*.js'], ['scripts']);
	gulp.watch(['./*.php', './template-parts/*.php'], ['php']);
});
