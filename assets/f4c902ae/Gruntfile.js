module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
                mangle: false,
                beautify: true
            },
            my_target: {
                files:
                    [{
                        'js/<%= pkg.name %>.min.js':
                            [
                                'node_modules/admin-lte/plugins/jquery/jquery.min.js',
                                'node_modules/admin-lte/plugins/jQueryUI/jquery-ui.min.js',
                                'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
                                'node_modules/admin-lte/plugins/sparkline/jquery.sparkline.min.js',
                                'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
                                'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                                'node_modules/admin-lte/plugins/knob/jquery.knob.js',
                               // 'node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
                                'node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
                                'node_modules/admin-lte/plugins/fastclick/fastclick.js',
                                'node_modules/admin-lte/dist/js/adminlte.js',
                             //   'node_modules/admin-lte/dist/js/pages/dashboard.js',
                             //   'node_modules/admin-lte/dist/js/demo.js',
                               /* 'node_modules/jquery.nicescroll/dist/jquery.nicescroll.js',
                                'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
                                'node_modules/sweetalert2/dist/sweetalert2.js',
                                'node_modules/select2/dist/js/select2.full.js',
                                'node_modules/select2/dist/js/i18n/es.js',
                                'node_modules/inputmask/dist/jquery.inputmask.bundle.js',
                                'node_modules/jquery-serializejson/jquery.serializejson.js',
                                'node_modules/numeral/numeral.js',
                                'node_modules/admin-lte/dist/adminlte.js',
                               // 'js/*.js'*/
                            ]
                    },
                      /*  {
                            'public/assets/js/grafico.min.js':
                                [
                                    'node_modules/plotly.js/dist/plotly-basic.js'
                                ]
                        },
                        {
                            'public/assets/js/tabla.min.js':
                                [
                                    'node_modules/datatables.net/js/jquery.dataTables.js',
                                    'node_modules/datatables.net-bs/js/dataTables.bootstrap.js'
                                ]
                        }
                        */
                    ]
            }
        },
        sync: {
            main: {
                files: [{
                    cwd: 'node_modules/font-awesome/fonts/',
                    src: [
                        '**', /* Include everything */
                        '!**/*.txt' /* but exclude txt files */
                    ],
                    dest: 'fonts/'
                },
                    {
                        cwd: 'node_modules/bootstrap/dist/fonts/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */
                        ],
                        dest: 'fonts/bootstrap/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/dist/css/',
                        src: [
                            'adminlte.css'
                        ],
                        dest: 'css/'
                    },


                     {
                        cwd: 'node_modules/admin-lte/plugins/iCheck/flat/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/plugins/morris/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/plugins/jvectormap/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/plugins/datepicker/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/plugins/daterangepicker/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/admin-lte/plugins/bootstrap-wysihtml5/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },



                    {
                        cwd: 'node_modules/datatables.net-bs/css/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/inputmask/css/',
                        src: [
                            '**', /* Include everything */
                            '!**/*.txt' /* but exclude txt files */,
                            '!**/*.md' /* but exclude txt files */,
                            '!**/*.json' /* but exclude txt files */
                        ],
                        dest: 'css/'
                    },
                    {
                        cwd: 'node_modules/dropzone/dist/',
                        src: [
                            '**/*.js', /* Include everything */
                        ],
                        dest: 'js/'  
                    },
                    {
                        cwd: 'node_modules/dropzone/dist/',
                        src: [
                            '**/*.css', /* Include everything */
                        ],
                        dest: 'css/'  
                    }
                ]
            }
        },
       /* compass: {
            dist: {
                options: {
                    sassDir: 'scss/',
                    cssDir: 'public/assets/css/',
                    fontsDir: 'public/assets/fonts/',
                    imagesPath: 'public/assets/img/',
                    javascriptsDir: 'public/assets/js/',
                    specify: 'scss/style.scss',
                    environment: 'production',
                    outputStyle: 'compressed',
                    quiet: false
                }
            },
            cmp_section: {
                options: {
                    sassDir: 'scss/',
                    cssDir: 'public/assets/css/',
                    fontsDir: 'public/assets/fonts/',
                    imagesPath: 'public/assets/img/',
                    javascriptsDir: 'public/assets/js/',
                    specify: 'scss/cmp_section.scss',
                    environment: 'development',
                    quiet: false
                }
            }
        },*/
       /* watch: {
            compass: {
                files: 'scss/style.scss',
                tasks: 'compass'
            },
            uglify: {
                files: 'js/*.js',
                tasks: 'uglify'
            }
        }*/
    });

//  grunt.loadNpmTasks('grunt-bowercopy');
    grunt.loadNpmTasks('grunt-sync');
  //  grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    //grunt.loadNpmTasks('grunt-contrib-watch');


    grunt.registerTask('default', ['sync', 'uglify' /*, 'compass'*/]);
};