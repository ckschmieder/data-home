module.exports = function(grunt) {
  grunt.initConfig({



    concat : {
      options: {
        separator: '\n\n//------------------------------------------\n',
        banner: '\n\n//------------------------------------------\n'
      },
      dist : {
        src: ['components/scripts/*.js'],
        dest: 'builds/development/js/script.js'
      }
    }, //concat

    sass: {
      dist: {
        options: {
          style: 'expanded',
          sourceMap: true
        },
        files : [{
          src: 'components/scss/main.scss',
          dest: 'builds/development/css/style.css'
        }]
      },
      prod: {
        options: {
          style: 'compressed'
        },
        files : [{
          src: 'components/sass/style.scss',
          dest: 'builds/production/css/style.css'
        }]
      }
    }, //sass

    autoprefixer: {
      multiple_files: {
        src: "builds/development/css/style.css"
      }
    }, //autoprefixer

    uglify: {
      options: {
        preserveComments: "some",
        sourceMap: true
      },
      theme: {
      files  : {
        'builds/development/js/script.min.js': [
          // "components/scripts/_bower.js",            
          'builds/development/js/script.js'           
        ]
      }
    }
      
    }, //uglify

    // wiredep: {
    //   task: {
    //     src: 'builds/development/**/*.html'
    //   }
    // },

    // connect: {
    //   sever: {
    //     options: {
    //       hostname: 'localhost',
    //       port: 3000,
    //       base: 'builds/development/',
    //       livereload: true
    //     }
    //   }
    // },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'builds/development/css/style.min.css': ['builds/development/css/style.css']
        }
      }
    },

    watch: {
      options: {
        spawn: false,
        livereload: true
      },
      scripts: {
        files: ['components/scripts/**/*.js',
        'components/scss/partials/*.scss'],
        tasks: ['concat', 'sass']
      }
    }


  }); //initConfig

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  // grunt.loadNpmTasks('grunt-bower-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['concat', 'uglify', 'sass:dist', 'autoprefixer', 'cssmin', 'watch' ]);

}; //wrapper function