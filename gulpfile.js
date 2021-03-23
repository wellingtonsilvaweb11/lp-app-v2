//adciona os modulos instalados

const gulp = require('gulp');
const sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


//função para compilar sass e add os prefixos
function compilaSass(){
	return gulp
	.src('assets/css/sass/*.scss')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('assets/css/'))
	.pipe(browserSync.stream());
}

//função para compilar o sass
gulp.task('sass', compilaSass);

//função para iniciar o browser
gulp.task('browser-sync', browser);

//tarefa para iniciar o browser;
function browser(){
	
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
}

//inicia a tarefa browserSync
gulp.task('browser-sync', browser);


//função de watch para gulp
function watch (){
	gulp.watch('assets/css/sass/*.scss' , compilaSass);
	gulp.watch(['*.html', '*.php']).on('change', browserSync.reload);
}


gulp.task('watch', watch);

//tarefa padrão digitar apenas gulp no terminal
gulp.task('default', gulp.parallel('watch', 'browser-sync'));