module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        files: {
           '../css/admin/base.css': 'css/base.scss'
          ,'../css/admin/colpick.css': 'css/colpick.scss'
          ,'../css/admin/contents.css': 'css/contents.scss'
          ,'../css/admin/default.css': 'css/default.scss'
          ,'../css/admin/import.css': 'css/import.scss'
          ,'../css/admin/layout.css': 'css/layout.scss'
          ,'../css/admin/toolbar.css': 'css/toolbar.scss'
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
