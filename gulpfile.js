var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

// gulp sass compiling
gulp.task('sass', function(){
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

// error function
function logError(error){
    console.error.bind(error);
    this.emit('end');
}


// browser auto load
gulp.task('browserSync', function(){
    browserSync.init({
        // server:{
        //     baseDir:'./'
        // },
        proxy:'http://localhost/wpthemedev/'
    })
});

// gulp watch task
gulp.task('watch', ['browserSync', 'sass'], function(){
    gulp.watch('sass/*.scss', ['sass']);

    // reload browser on PHP, CSS and JavaScript file changes
    gulp.watch('./*.php', browserSync.reload);
    gulp.watch('./*.css', browserSync.reload);
    gulp.watch('./*.js', browserSync.reload);
});