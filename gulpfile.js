const { src, dest, watch, parallel } = require('gulp');

// CSS
const sass = require('gulp-sass')(require('sass')); // Dart Sass
const postcss = require('gulp-postcss'); // PostCSS
const autoprefixer = require('autoprefixer'); // Autoprefixer
const cssnano = require('cssnano'); // CSS Minification
const sourcemaps = require('gulp-sourcemaps'); // Source Maps

// JavaScript
const concat = require('gulp-concat'); // File Concatenation
const terser = require('gulp-terser'); // JavaScript Minification
const webpack = require('webpack-stream'); // Webpack Integration
const rename = require('gulp-rename'); // File Renaming

// Image Optimization
const webp = require('gulp-webp'); // WebP Conversion
const imagemin = require('gulp-imagemin'); // Image Minification
const cache = require('gulp-cache'); // Cache Images
const avif = require('gulp-avif'); // AVIF Conversion
const svgmin = require('gulp-svgmin'); // SVG Minification

// Paths
const path = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    img: 'src/img/**/*.{jpg,png}',
    svg: 'src/img/**/*.svg'
};


// // Compile SCSS to CSS
function compileSass() {
    return src(path.scss)
        .pipe(sourcemaps.init()) // Initialize sourcemaps
        .pipe(sass().on('error', sass.logError)) // Compile SCSS
        .pipe(postcss([autoprefixer(), cssnano()])) // Autoprefixer and CSS minification
        .pipe(sourcemaps.write('.')) // Write sourcemaps
        .pipe(dest('./public/build/css')); // Output to destination folder
}

// JavaScript compilation with Webpack
function compileJS() {
    return src(path.js)
        .pipe(webpack({
            mode: 'production',
            entry: './src/js/app.js',
            output: {
                filename: 'app.js'
            }
        }))
        .pipe(sourcemaps.init()) // Initialize sourcemaps
        .pipe(concat('app.js')) // Concatenate JS
        .pipe(terser()) // Minify JS
        .pipe(sourcemaps.write('.')) // Write sourcemaps
        .pipe(rename({ suffix: '.min' })) // Rename output file
        .pipe(dest('./public/build/js')); // Output to destination folder
}

// Optimize images
function imageMin() {
    return src(path.img)
        .pipe(cache(imagemin({ optimizationLevel: 3 }))) // Optimize images with cache
        .pipe(dest('./public/build/img')); // Output to destination folder
}

// Convert images to WebP
function imgWebp() {
    return src(path.img)
        .pipe(webp({ quality: 50 })) // Convert to WebP with quality setting
        .pipe(dest('./public/build/img')); // Output to destination folder
}

// Convert images to AVIF
function imgAvif() {
    return src(path.img)
        .pipe(avif({ quality: 50 })) // Convert to AVIF with quality setting
        .pipe(dest('./public/build/img')); // Output to destination folder
}

// Minify SVGs
function imgSvg() {
    return src(path.svg)
        .pipe(svgmin()) // Minify SVG files
        .pipe(dest('./public/build/img')); // Output to destination folder
}

// Watch for file changes and automatically compile
function autoCompile() {
    watch(path.scss, compileSass); // Watch for SCSS changes
    watch(path.js, compileJS); // Watch for JS changes
    watch(path.img, parallel(imgAvif, imgWebp, imageMin)); // Watch for image changes
}

// Default Gulp task
exports.default = parallel(compileSass, compileJS, autoCompile, imgAvif, imageMin, imgWebp, imgSvg);


// function compileJS() {
//    return src(path.js)
//        .pipe(webpack({
//            module: {
//                rules: [
//                   {
//                      test: /\.css$/i,
//                      use: ['style-loader', 'css-loader']
//                   }
//                ]
//            },
//            mode: 'production',
//            watch: true,
//            entry: './src/js/app.js'
//        }))
//        .pipe(sourcemaps.init())
//        // .pipe(concat('bundle.js'))
//        .pipe(terser())
//        .pipe(sourcemaps.write('.'))
//        .pipe(rename({suffix: '.min' }))
//        .pipe(dest('./public/build/js'));
// }


// function compileJS() {
//     return src(path.js)
//         .pipe(sourcemaps.init())
//         .pipe(webpack({
//             mode: 'production',
//             entry: './src/js/app.js',
//             output: {
//                 filename: 'app.js' // Nombre del archivo de salida
//             },
//             module: {
//                 rules: [
//                     {
//                         test: /\.css$/i,
//                         use: ['style-loader', 'css-loader']
//                     }
//                 ]
//             },
//             // Otras configuraciones de Webpack, si es necesario
//         }))
//         .pipe(terser()) // Minificar el JS
//         .pipe(rename({ suffix: '.min' })) // Añadir sufijo .min
//         .pipe(sourcemaps.write('.')) // Escribir sourcemaps
//         .pipe(dest(path.jsDest)); // Destino de salida
// }