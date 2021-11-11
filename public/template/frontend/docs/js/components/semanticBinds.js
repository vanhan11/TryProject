define(['jquery', 'sidebar', 'smoothScroll', 'popup', 'customScroll'], function(){
	'use strict';

	var Semantic = {
		init: function() {
			this.bindUIActions();
		},

		bindUIActions: function() {
			Semantic.initSidebar();
			Semantic.smoothScrolling();
			// Semantic.initPopups();

			$('.js-sidebar-toggle').click(function(event) {
				Semantic.toggleSidebar($(this).find('i'));
			});
		},

		initPopups: function() {
			$('span[title]').popup();
		},

		initSidebar: function() {
			$('.documentation-sidebar').sidebar({
				overlay: false
			});

			$('.documentation-sidebar').sidebar('show');
		},

		toggleSidebar: function(el) {
			if (el.hasClass('is-open')) {
				el.removeClass('is-open fa fa-angle-left').addClass('is-closed fa fa-angle-right');
				$('.documentation-sidebar').sidebar('hide');
				el.parent().addClass('is-closed');
			} else {
				el.removeClass('is-closed fa fa-angle-right').addClass('is-open fa fa-angle-left');
				$('.documentation-sidebar').sidebar('show');
				el.parent().removeClass('is-closed');
			}
		},

		smoothScrolling: function() {
			$('.page-navs').singlePageNav({
				'speed': 700,
				'currentClass': 'active'
			});

			$('.documentation-sidebar').mCustomScrollbar({
				theme: 'minimal-dark',
				scrollInertia: 800,
				mouseWheel: {
					scrollAmount: 200
				}
			}).append('<span class="sidebar-toggle js-sidebar-toggle"><i class="fa fa-angle-left is-open"></i></span>');
		}
	};

	return Semantic;
});