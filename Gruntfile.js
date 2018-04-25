module.exports = function( grunt ) {
  grunt.initConfig({
  	pkg: grunt.file.readJSON('package.json'),
    sass : {
      dist : {
        options : { style : 'nested' },
        files : {
          'style.css' : 'style.scss'
        }
      }
    },
    watch : {
	    options: {
	        livereload: true
	    },
      	dist : {
	        files : [
		        '*.php',
		        '*.css',
		        '*.scss',
		        'css/*.css',
		        'js/*.js'
	        ],
	        tasks : ['sass']
      	}
    }
  });


  // Plugins do Grunt
  grunt.loadNpmTasks( 'grunt-contrib-sass' );
  grunt.loadNpmTasks( 'grunt-contrib-watch' );


  // Tarefas que serão executadas
  grunt.registerTask( 'default', ['sass', 'watch']);
};