module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        files: {
          '../css/admin/toolbar.css': 'css/toolbar.scss'
        }
      }
    },
    watch: {
      scripts: {
        files: [
            'css/*'
        ],
        tasks: [
          'sass'
        ],
        options: {
          interrupt: true
        }
      }
    }
  });

  grunt.registerTask('default', [
    'sass'
  ]);

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

};
