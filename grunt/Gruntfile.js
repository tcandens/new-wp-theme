module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		// Compile SASS from SCSS folder into style.css
		sass: {
			dev: {
				options: {
					style: "expanded"
				},
				src: ['../scss/style.scss'],
				dest: '../app/style.css'
			}
		},

		// Copy files for development and staging
		copy: {
			dev: {
				files: [
					// Copy Files from App directory into development server
					{expand: true, cwd: '../app/', src: ['**/*'], dest: '../dev/'}
				]
			}
		},

		// Notify tasks
		notify: {
			dev: {
				options: {
					title: "Development Staging Done!",
					message: "Files processed and copied to production server"
				}
			}
		},

		// Watch for changes
		watch: {
			sass: {
				files: ['../scss/**/*.scss'],
				tasks: [
					'sass:dev'
				]
			},
			dev: {
				files: ['../scss/**/*.scss', '../app/**/*.php'],
				tasks: [
					'sass:dev',
					'copy:dev'
				]
			}
		}

	});

	// Load Modules
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-notify');

	// Run Development Watcher
	grunt.registerTask('dev', [
		'sass:dev',
		'copy:dev',
		'notify:dev'
	]);

};