var gulp = require('gulp');
var zip = require('gulp-zip');

gulp.task('zip', function () {
    return gulp.src(['basic_snippets_pack/**/*'], {base: "."})
        .pipe(zip('basic_snippets_pack.zip'))
        .pipe(gulp.dest('./release'));
});

gulp.task('default', ['zip']);