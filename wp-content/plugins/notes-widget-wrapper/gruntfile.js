module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "public/css/notes-widget-wrapper-public.css": "public/less/notes-widget-wrapper-public.less",
          "admin/css/notes-widget-wrapper-admin.css": "admin/less/notes-widget-wrapper-admin.less"
        }
      }
    },
    watch: {
      styles: {
        files: ['**/less/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    },
    pot: {
      options: {
        text_domain: 'notes-widget-wrapper', //Your text domain. Produces my-text-domain.pot 
        dest: 'languages/', //directory to place the pot file 
        keywords: [ '__', '_e', 'esc_html__', 'esc_html_e'], //functions to look for 
      },
      files: {
        src:  [ '**/*.php' ], //Parse all php files 
        expand: true,
      }
    },
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-pot');
  // Default task(s).
  grunt.registerTask('default', ['less', 'watch']);
  grunt.registerTask('generate-pot', ['pot']);
};