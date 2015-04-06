module.exports = function(grunt) {
  var taskName;
  var pkg = grunt.file.readJSON('package.json');
  for(taskName in pkg.devDependencies) {
    if(taskName.substring(0, 6) == 'grunt-') {
      grunt.loadNpmTasks(taskName);
    }
  }

  grunt.initConfig({
    connect: {
      livereload: {
        options: {
          port: 35730
        }
      }
    },

    open: {
      server: {
        path: 'http://localhost:<%= connect.livereload.options.port %>'
      }
    },

  sass: {
    dist: {
      options: {
        style: 'compact'
      },
      files: {
        'common/css/style.css': 'common/scss/style.scss'
      }
    }
  },

  uglify: {
    build : {
     src : 'common/js/script.js',
     dest : 'common/js/script.min.js'
   }
 },

 csscomb: {
  options: {
            config: 'common/config/csscomb-config.json' //設定ファイルのパスを指定
          },
          main: {
            files: {
              'common/css/style.css': ['common/css/style.css']
            }
          }
        },

        watch: {
          options: {
            livereload: true,
            nospawn: true
          },
          html: {
            files: '*.html',
            tasks: []
          },
          php:{
            files:'*.php',
            tasks: []
          },
          css:{
            files:'common/css/*.css',
            tasks: ['csscomb']
          },
          scss:{
            files:'common/scss/**/*.scss',
            tasks:['sass']
          },
          scripts: {
            files: 'common/js/script.js',
            tasks: ['uglify']
          }
        }
      });

grunt.registerTask('default', [ 'connect' , 'open' , 'watch' , 'sass', 'csscomb', 'uglify' ]);
grunt.registerTask('dist', [ 'watch' , 'sass', 'uglify' ,'csscomb' ]);
};