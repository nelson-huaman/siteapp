const { src, dest, watch, parallel } = require('gulp');

// CSS
const sass = require('gulp-dart-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');

// JavaScript
// const concat = require('gulp-concat');
const terser = require('gulp-terser');
const webpack = require('webpack-stream');
const rename = require('gulp-rename');

// Image Optimization
const webp = require('gulp-webp');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const avif = require('gulp-avif');
const svgmin = require('gulp-svgmin');

// Paths
const path = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    img: 'src/img/**/*.{jpg,png}',
    svg: 'src/img/**/*.svg'
};

// Compile SCSS to CSS
function compileSass() {
    return src(path.scss)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./public/build/css'));
}

// JavaScript compilation with Webpack
function compileJS() {
    return src(path.js)
        .pipe(webpack({
            mode: 'production',
            entry: './src/js/app.js',
            output: {
                filename: 'app.js'
            },
            // module: {
            //     rules: [
            //         {
            //             test: /\.css$/i,
            //             use: ['style-loader', 'css-loader']
            //         }
            //     ]
            // }
        }))
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./public/build/js'));
}

// Optimize images
function imageMin() {
    return src(path.img)
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest('./public/build/img'));
}

// Convert images to WebP
function imgWebp() {
    return src(path.img)
        .pipe(webp({ quality: 50 }))
        .pipe(dest('./public/build/img'));
}

// Convert images to AVIF
function imgAvif() {
    return src(path.img)
        .pipe(avif({ quality: 50 }))
        .pipe(dest('./public/build/img'));
}

// Minify SVGs
function imgSvg() {
    return src(path.svg)
        .pipe(svgmin())
        .pipe(dest('./public/build/img'));
}

// Watch for file changes and automatically compile
function autoCompile() {
    watch(path.scss, compileSass);
    watch(path.js, compileJS);
    watch(path.img, parallel(imgAvif, imgWebp, imageMin));
}

// Default Gulp task
exports.default = parallel(compileSass, compileJS, autoCompile, imgAvif, imageMin, imgWebp, imgSvg);