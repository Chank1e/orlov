    $.navigation = $('nav > ul.nav');

/****
* MAIN NAVIGATION
*/

$(document).ready(function($){

	navigationSmartResize();

	// Add class .active to current link - AJAX Mode off
	$.navigation.find('a').each(function(){

		var cUrl = String(window.location);

		if (cUrl.substr(cUrl.length - 1) == '#') {
			cUrl = cUrl.slice(0,-1);
		}

		if ($($(this))[0].href==cUrl) {
			$(this).addClass('active');

			$(this).parents('ul').add(this).each(function(){
			    $(this).parent().addClass('open');
			});
		}
	});

	// Dropdown Menu
	$.navigation.on('click', 'a', function(e){

		if ($.ajaxLoad) {
			e.preventDefault();
		}

        if ($(this).hasClass('nav-dropdown-toggle')) {
			$(this).parent().toggleClass('open');
		}

	});

	function resizeBroadcast() {
		var timesRun = 0;
		var interval = setInterval(function(){
			timesRun += 1;
			if(timesRun === 5){
				clearInterval(interval);
			}
			window.dispatchEvent(new Event('resize'));
		}, 62.5);
	}

	/* ---------- Main Menu Open/Close, Min/Full ---------- */
	$('.navbar-toggler').click(function(){

		var bodyClass = localStorage.getItem('body-class');

		if ($(this).hasClass('layout-toggler') && $('body').hasClass('sidebar-off-canvas')) {
			$('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
			//resize charts
			resizeBroadcast();

		} else if ($(this).hasClass('layout-toggler') && ($('body').hasClass('sidebar-nav') || bodyClass == 'sidebar-nav')) {
			$('body').toggleClass('sidebar-nav');
			localStorage.setItem('body-class', 'sidebar-nav');
			if (bodyClass == 'sidebar-nav') {
				localStorage.clear();
			}
			//resize charts
			resizeBroadcast();
		} else {
			$('body').toggleClass('mobile-open');
		}
	});

	$('.aside-toggle').click(function(){
		$('body').toggleClass('aside-menu-open');

		//resize charts
		resizeBroadcast();
	});

	$('.sidebar-close').click(function(){
		$('body').toggleClass('sidebar-opened').parent().toggleClass('sidebar-opened');
	});

	/* ---------- Disable moving to top ---------- */
	$('a[href="#"][data-top!=true]').click(function(e){
		e.preventDefault();
	});

});
/****
* SMART RESIZE
*/
$(window).bind('resize', navigationSmartResize);

function navigationSmartResize(e) {

	if ($('body').hasClass('sidebar-nav') && $('body').hasClass('fixed-nav')) {
		var bodyHeight = $(window).height();
		var headerHeight = $('header').outerHeight();
        var sidebarHeaderHeight = $('.sidebar-header').outerHeight();
        var sidebarFooterHeight = $('.sidebar-footer').outerHeight();

        if ($('body').hasClass('sidebar-off-canvas')) {
            $('nav.sidebar-nav').css('height', bodyHeight - sidebarHeaderHeight - sidebarFooterHeight);
        } else {
            $('nav.sidebar-nav').css('height', bodyHeight - headerHeight - sidebarHeaderHeight - sidebarFooterHeight);
        }
	}
}

function logout(){
                $.ajax({
                  url: 'logout.php'
                });
    window.location.href="login";
}