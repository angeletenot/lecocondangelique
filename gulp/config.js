var sourceFiles = './assets';
var destFiles = './content/themes/coconangelique'
var deployFiles = './deploytmp';

module.exports = {
    self: './gulp/config.js',
    deployFiles: deployFiles,
    browserSync: {
        notify: false,
        open: false,
        port: 5001,
        proxy: 'lecocondangelique.lo',
        files: [destFiles + '/style.css'],
        ui: {
            port: 5002
        }
    },
    styles: {
        src: sourceFiles + '/styles',
        folder_src: sourceFiles + '/styles/**/*.scss',
        main_src: sourceFiles + '/styles/main.scss',
        dest: destFiles + '/',
        settings: {},
        deploy_dest: deployFiles + '/'
    },
    scripts: {
        folder_src: sourceFiles + '/scripts/*.js',
        vendor_src: sourceFiles + '/scripts/lib/vendor/**/*.js',
        custom_src: sourceFiles + '/scripts/lib/custom/**/*.js',
        all_src: sourceFiles + '/scripts/**/*.js',
        dest: destFiles + '/scripts/',
        deploy_dest: deployFiles + '/scripts/'
    },
    images: {
        folder_src: sourceFiles + '/images/**/*.{jpg,png,gif,svg}',
        src: sourceFiles + '/images',
        dest: destFiles + '/images/',
        deploy_dest: deployFiles + '/images/'
    },
    fonts: {
        folder_src: sourceFiles + '/fonts/**/*',
        src: sourceFiles + '/fonts',
        dest: destFiles + '/fonts/',
        deploy_dest: deployFiles + '/fonts/'
    },
    iconFont: {
        src: sourceFiles + '/iconFont',
        folder_src: sourceFiles + '/iconFont/*.svg',
        dest: destFiles + '/fonts',
        template_src: sourceFiles + '/styles/tools/_template-font-custom.scss',
        template_dest_rel: '/../../../../assets/styles/components/_icons.scss',
        template_dest_abs: sourceFiles + '/styles/components/_icons.scss',
        template_dest_folder: sourceFiles + '/styles/components',
        font_src: 'fonts/',
        settings: {
            fontName: 'coconangelique-icons',
            appendCodepoints: true,
            normalize: true,
            fontHeight: 512
        },
        deploy_dest: deployFiles + '/fonts/'
    },
    templates: {
        folder_src: destFiles + '/**/*.{php}'
    }
};
