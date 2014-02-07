'use strict';
module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.initConfig({

        // watch for changes and trigger compass, jshint, uglify and livereload
        watch: {
            compass: {
                files: ['_/scss/*.{scss,sass,css}'],
                tasks: ['compass']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            livereload: {
                options: { livereload: true },
                files: ['style.css', '_/js/*.js', '*.html', '*.php', 'gfx/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        // compass and scss
        compass: {
            dev: {
                options: {
                    config: 'config.rb'
                } //options
            } //dev
        },  //compasss

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                '/js/**/*.js'
            ]
        },

        // uglify to concat and minify
        uglify: {
            my_target: {
                files: {
                    'js/scripts.js' : ['_/js/vendor/*.js' , '_/js/author.js']
                } //files
            } //my_target
        }, //uglify

    });

    // register task
    grunt.registerTask('default', ['watch']);

};