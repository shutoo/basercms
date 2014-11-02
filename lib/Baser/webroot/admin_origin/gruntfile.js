module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      options: {
        style: 'compressed'
      },
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
    uglify: {
      dist_default: {
        options: {
          banner:
                '/**!'
            + '\n * baserCMS default.js'
            + '\n *'
            + '\n * included:'
            + '\n *'
            + '\n * jquery-ui-1.8.19.custom.min.js'
            + '\n * i18n/ui.datepicker-ja.js'
            + '\n * jquery.corner-2.12.js'
            + '\n * jquery.bt.min.js'
            + '\n * jquery.contextMenu-1.0/jquery.contextMenu.js'
            + '\n * jquery.form-2.94.js'
            + '\n * jquery.validate.min.js'
            + '\n * jquery.colorbox-min-1.4.5.js'
            + '\n * jquery.mScroll.js'
            + '\n * jquery.baseUrl.js'
            + '\n * credit.js'
            + '\n * validate_messages_ja.js'
            + '\n * functions.js'
            + '\n * startup.js'
            + '\n * adjust_scroll.js'
            + '\n * yuga.js'
            + '\n *'
            + '\n * MIT license.'
            + '\n *'
            + '\n */',
          sourceMap: true
        },
        files: {
          '../js/admin/default.js': [
            'js/default/jquery-ui-1.8.19.custom.min.js',
            'js/default/i18n/ui.datepicker-ja.js',
            'js/default/jquery.corner-2.12.js',
            'js/default/jquery.bt.min.js',
            'js/default/jquery.contextMenu-1.0/jquery.contextMenu.js',
            'js/default/jquery.form-2.94.js',
            'js/default/jquery.validate.min.js',
            'js/default/jquery.colorbox-min-1.4.5.js',
            'js/default/jquery.mScroll.js',
            'js/default/jquery.baseUrl.js',
            'js/default/credit.js',
            'js/default/validate_messages_ja.js',
            'js/default/functions.js',
            'js/default/startup.js',
            'js/default/adjust_scroll.js',
            'js/default/yuga.js'
          ]
        }
      }
    },
    image: {
      dist: {
        files: [{
          expand: true,
          cwd: 'img/',
          src: ['**/*.{png,jpg,gif}'],
          dest: '../img/admin'
        }]
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
    'sass',
    'image'
  ]);

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-image');
  grunt.loadNpmTasks('grunt-contrib-watch');

};
