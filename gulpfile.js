var gulp = require('gulp');
var sass = require('gulp-sass');



//task for sass
gulp.task('default', function() {
    return gulp.src('sass/**/*.sass')
        .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('css'));
});

//task for watch
gulp.task('sass:watch', function() {
    gulp.watch('sass/**/*.sass',['sass']);
});


