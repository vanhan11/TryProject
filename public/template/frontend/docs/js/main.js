requirejs.config({
	paths: {
		'jquery': 'lib/jquery-1.11.0.min',
		'sidebar': 'lib/sidebar',
		'smoothScroll': 'lib/jquery.singlePageNav.min',
		'popup': 'lib/popup',
		'customScroll': 'lib/jquery.mCustomScrollbar.concat.min',
		'smoothScr': 'lib/smoothScroll'
	},

	shim: {
		'sidebar': ['jquery'],
		'smoothScroll': ['jquery'],
		'popup': ['jquery'],
		'customScroll': ['jquery']
	}
});

require([
	'components/initPageScripts'
], function(IPS){
	'use strict';
	IPS.initialize();
});	