/*jshint node:true */
module.exports = function( grunt ) {
	'use strict';

	require( 'load-grunt-tasks' )( grunt );

	// Initialize Grunt Config
	// --------------------------
	grunt.initConfig({

		// Gets the package vars
		pkg: grunt.file.readJSON( 'package.json' ),

		// Setting folder templates
		dirs: {
			css: 'assets/css',
			js: 'assets/js',
			sass: 'assets/sass',
			images: 'assets/images',
			fonts: 'assets/fonts'
		},

		// Javascript linting with jshint
		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'<%= dirs.js %>/main.js'
			]
		},

		// Uglify to concat and minify
		uglify: {
			dist: {
				files: {
					'<%= dirs.js %>/main.min.js': [
						'<%= dirs.js %>/main.js'
					]
				}
			}}
			}
		},

		// Compile scss/sass files to CSS
		sass: {
			dist: {
				options: {
					style: 'expanded',
					sourceMap: 'none'
				},
				files: [{
					expand: true,
					cwd: '<%= dirs.sass %>',
					src: ['*.scss'],
					dest: './',
					ext: '.css'
				}]
			}
		},

		// Watch for changes and trigger sass, jshint and uglify
		watch: {
			sass: {
				files: [
					'<%= dirs.sass %>/**'
				],
				tasks: ['sass']
			},
			js: {
				files: [
					'<%= jshint.all %>'
				],
				tasks: ['jshint', 'uglify']
			},
			options: {
				spawn: false
			}
		},

		// image optimization
		imagemin: {
			dist: {
				options: {
					optimizationLevel: 7,
					progressive: true
				},
				files: [{
					expand: true,
					filter: 'isFile',
					cwd: '<%= dirs.images %>/',
					src: '**/*.{png,jpg,gif}',
					dest: '<%= dirs.images %>/'
				}]
			}
		}
	});

	// Register Tasks
	// --------------------------

	// Default Task
	grunt.registerTask( 'default', [
		'jshint',
		'sass',
		'uglify'
	] );

	// Optimize Images Task
	grunt.registerTask( 'optimize', ['imagemin'] );
};
