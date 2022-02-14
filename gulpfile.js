
'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function buildStyles() {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./src/css'));
}

exports.buildStyles = buildStyles;
exports.watch = function () {
    gulp.watch('./src/sass/**/*.scss', ['sass']);
};
