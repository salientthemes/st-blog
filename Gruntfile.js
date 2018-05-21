module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // COMPASS
    compass: {
        main: {
          options: { // Target options
            sassDir: './assets/src/scss/',
            cssDir: './assets/build/css/',
            environment: 'development',
            outputStyle: 'compact',
            sourcemap: true
          }
        } 
    },

    // COPY CONTENT
    copy: {
            img: {
                files: [{
                    expand: true,
                    cwd: './assets/src/img/',
                    src: '**',
                    dest: './assets/build/img/',
                    filter: 'isFile'
                }]
            }, 
            js: {
                files: [{
                    expand: true,
                    cwd: './assets/src/js/',
                    src: '**',
                    dest: './assets/build/js/',
                    filter: 'isFile'
                }]
            }, 
            css: {
                files: [{
                    expand: true,
                    cwd: './assets/src/css/',
                    src: '**',
                    dest: './assets/build/css/',
                    filter: 'isFile'
                }]
            }, 
            webfonts: {
                files: [{
                    expand: true,
                    cwd: './assets/src/webfonts/',
                    src: '**',
                    dest: './assets/build/webfonts/',
                    filter: 'isFile'
                }]
            }, 
    },

    // GRUNT WATCH
    watch: {
        sass: {
            files: [
                './assets/src/scss/*.scss',
                './assets/src/scss/**/*.scss',
                '../assets/src/scss/**/**/*.scss'
            ],
            tasks: ['css']
        },

    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-compass');
  // grunt.loadNpmTasks('grunt-contrib-concat');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('css', ['compass:main']);
  // grunt.registerTask('js', ['concat']);
  // grunt.registerTask('img', ['copy']); 
  grunt.registerTask('default', ['compass', 'copy']);//, 'uglify', 'concat'

};