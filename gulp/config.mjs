const src = 'src/'
const dest = 'web/themes/custom/app_theme/'

export const config = {
    css: {
        from: [src + 'scss/main.scss', src + 'scss/ckeditor.scss'],
        to: dest + 'dist/css',
        glob: src + 'scss/**/*',
        include: ['node_modules'],
    },
    js: {
        from: src + 'js/main.js',
        to: dest + 'dist/js',
        glob: src + 'js/**/*',
    },
    svgstore: {
        glob: src + 'svgstore/**/*',
        to: dest + 'templates/',
    },
}
