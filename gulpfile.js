var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp
        .src('./src/sass/**/*.scss')
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(gulp.dest('./dest/css'));
});