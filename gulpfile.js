const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");

gulp.task("sass", function () {
  return gulp
    .src(["node_modules/**/*.scss"], ["node_modules/**/*/.css"], {
      base: "node_modules",
    })
    .pipe(sass())
    .pipe(gulp.dest("src/css"));
});

gulp.task("js", function () {
  return gulp
    .src(["node_modules/**/*.js"], ["node_modules/**/*/.min.js"], {
      base: "node_modules",
    })
    .pipe(concat("index.js"))
    .pipe(gulp.dest("src/js"));
});
