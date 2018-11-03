var gulp = require('gulp');
var wpPot = require('gulp-wp-pot');

gulp.task('generate-pot', function () {
    return gulp.src(['**/*.php', '!.git/*' ,'!.git/*/**' ,'!node_modules/*', '!node_modules/*/**'])
        .pipe(wpPot( {
            domain: 'notes-widget-wrapper',
            package: 'Notes Widget Wrapper'
        } ))
        .pipe(gulp.dest('languages/notes-widget-wrapper.pot'));
});