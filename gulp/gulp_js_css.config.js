function jscss (){


	var pathconfig = {

		css_path: [
			'./css/bootstrap.css',
			'./css/bootstrap-theme.css',
			'./css/animate.css',
			'./css/lightgallery.css',
			'./css/style.css'
		],

		js_path: [
		    './js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
			'./js/vendor/jquery-1.11.2.min.js',
			'./js/vendor/bootstrap.js',
			'./js/vendor/vivus.min.js',
			'./js/vendor/lightgallery.js',
			'./js/vendor/jquery.mobile.custom.min.js',
			'./js/jquery.validate.min.js',
			'./js/validation.js',
			'./js/main.js'
		]
	}

	return pathconfig;

}

module.exports = jscss();