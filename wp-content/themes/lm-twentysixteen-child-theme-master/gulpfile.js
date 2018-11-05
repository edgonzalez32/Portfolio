var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano'); 
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var notify = require('gulp-notify');
var rename = require('gulp-rename');

gulp.task('default', function() {

});

//compile sass to css
gulp.task('sass', function () {
	return gulp.src('./dev/styles/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('./css/'))
		.pipe(cssnano())
		.pipe(rename('style.min.css'))
		.pipe(gulp.dest('./css/'))
		.pipe(notify("Stylesheet updated."))
		.pipe(livereload());
});

//concat and minify all js 
gulp.task('scripts', function() {
	return gulp.src('./dev/scripts/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('./js/'))
		.pipe(rename('all.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./js/'))
		.pipe(notify("Scripts updated."))
		.pipe(livereload());
});

//livereload any php edits
gulp.task('php', function() {
	gulp.src('./template-contact.php')
		.pipe(notify("template-contact.php updated."))
		.pipe(livereload());
});

gulp.task('watch', function () {
	livereload.listen();
	gulp.watch(['./dev/styles/*.scss', './dev/styles/**/*.scss'], ['sass'] );
	gulp.watch('./dev/scripts/*.js', ['scripts']);
	gulp.watch(['./*.php', './partials/*.php'], ['php']);
});