module.exports = function(grunt) {

    // Project configuration. 
    grunt.initConfig({
      concat: {
        options: {
          separator: ';',
        },
        js: {
          src: ['app/js/scripts/*.js'],
          dest: 'app/js/script.js',
        },
        css: {
          src: ['app/less/reset.less','app/less/small.less','app/less/medium.less','app/less/large.less'],
          dest: 'app/styles.less',
        },
      },
    

        less: {
  development: {
    options: {
      paths: ["less/"]
    },
    files: {
      "app/css/styles.css": "app/styles.less"
    }
  }
},
        
        uglify: {
    js: {
      files: {
        'dist2/js/script.js': ['app/js/script.js']
      }
    }
  },
        cssmin: {
  options: {
    shorthandCompacting: false,
    roundingPrecision: -1
  },
  target: {
    files: {
      'dist2/css/styles.css': ['dist2/css/styles.css']
    }
  }
},
        
    autoprefixer: {
    options: {
        browsers: ['last 2 versions', 'ie 8', 'ie 9', '> 1%']
    },
    main: {
        expand: true,
        flatten: true,
        src: 'app/css/styles.css',
        dest: 'app/css/'
        }
    },
        
        
    
    watch: {
  scripts: {
    files: ['app/**/*.{js,css,less}'],
    tasks: ['concat', 'less', 'autoprefixer'],
    options: {
      spawn: false,
    },
  },
},
       
       browserSync: {
    dev: {
        bsFiles: {
            src : ['app/*', 'app/**/*', 'app/**/**/*']
        },
       
        options: {
        watchTask: true,
                debugInfoe: true,
                logConnections: true,
                notify: true,
            proxy: "localhost/phpfiler/gruntskabelon/app"
        }
    }
},
        
        imagemin: {
      options: {
        cache: false
      },

      dist2: {
        files: [{
          expand: true,
          cwd: 'app/images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'dist2/images'
        }]
      }
    },
        
       copy: {
  files: {
    cwd: 'app/',  // set working folder / root to copy
    src: '**/*',           // copy all files and subfolders
    dest: 'dist2/',    // destination folder
    expand: true           // required when using cwd
  }
},
    jshint: {
      

      // when this task is run, lint the Gruntfile and all js files in src
      build: ['Gruntfile.js', 'app/js/*.js']
    },
        
        qunit: {
  files: ['test/**/*.html']
}
        
    });
    
  // Default task(s).
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-qunit');

    
    //watch og browsersync virker ikke samtidig
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['copy', 'uglify', 'imagemin', 'cssmin']);

};