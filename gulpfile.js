let gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    imageMin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    gulpSVG = require('gulp-svg-sprite'),
    bs = require('browser-sync').create();

gulp.task('serve', () => {
    bs.init({
        open: 'external',
        host: 'laptop-power.loc',
        proxy: 'laptop-power.loc/src',
        port: 8080
    })

    gulp.watch("./src/**/*.php").on('change', bs.reload)
})

gulp.task('sass', () => {
    return gulp.src('./src/assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest("./src/assets/css"))
        .pipe(bs.stream())
})

gulp.task('svg', () => {
    return gulp.src('./src/assets/images/svg/*.svg')
        .pipe(gulpSVG({
            mode: {
                stack: {
                    sprite: "sprite.svg"
                }
            }
        }))
        .pipe(gulp.dest('./src/assets/'))
})

gulp.task('watch', () => {
    gulp.watch('./src/assets/sass/**/*.scss', gulp.series(['sass']))
})

gulp.task('default', gulp.series(
    'sass',
    gulp.parallel(['watch'], ['serve'])
))