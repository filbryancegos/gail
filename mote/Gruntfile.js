module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      app: {
        src: [
          'js/mote/navigation.js',
          'js/mote/skip-link-focus-fix.js',
          'js/mote/map.js',
          'bower_components/slick.js/slick/slick.js',
          'bower_components/foundation/js/foundation.js',
          'bower_components/foundation/js/foundation.dropdown.js',
          'js/mote/app.js',
          'js/mote/fadeeffect.js',
        ],
        dest: 'js/app.min.js'
      }
    },

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      dist: {
        files: {
          'js/app.min.js': ['js/app.min.js']
        }
      }
    },

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss', 'bower_components/Hover/scss', 'bower_components/ionicons/scss', 'bower_components/slick.js/slick']
      },
      dist: {
        options: {
          outputStyle: 'compressed',
          sourceMap: false,
        },
        files: {
          'css/app.min.css': 'scss/app.scss'
        }
      }
    },

    watch: {
      grunt: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js']
      },

      /*
      concat: {

      },
      */

      uglify: {
        files: 'js/mote/*.js',
        tasks: ['uglify']
      },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('build', ['concat','uglify','sass']);
  grunt.registerTask('default', ['build','watch']);
}
