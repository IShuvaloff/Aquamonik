// на JQuery
// $(function() {
	// var link = $('.m-menu-link-show');
	// var close = $('.m-menu-link-close');
	// var menu = $('.m-menu-bar');
	// var down = $('#down');

	// link.on('click', function(event) {
	// 	event.preventDefault();
	// 	menu.toggleClass('m-menu__active');
	// 	transform(link, close);
	// });

	// close.on('click', function(event) {
	// 	event.preventDefault();
	// 	menu.toggleClass('m-menu__active');
	// 	transform(close, link);
	// });

	// // перемотать страницу
	// down.on('click', function(event) {
	// 	event.preventDefault();
	// 	$('html, body').animate({scrollTop: 1000}, 500);
	// })
// });

// на чистом JS
var menu = document.querySelector('.m-menu-bar');
var link = document.querySelector('.m-menu-link-show');
var close = document.querySelector('.m-menu-link-close');

link.addEventListener('click', (event) => {
	event.preventDefault();
	menu.classList.toggle('m-menu__active');
	transform(link, close);
});

close.addEventListener('click', (event) => {
	event.preventDefault();
	menu.classList.toggle('m-menu__active');
	transform(close, link);
});

function transform(elementToHide, elementToShow) {
	// на JQuery
	// elementToHide.css('opacity', '0%');
	// elementToHide.css('z-index', '0');
	// elementToShow.css('opacity', '100%');
	// elementToShow.css('z-index', '1');

	// на чистом JS
	elementToHide.style.opacity = "0%";
	elementToHide.style.zIndex = "0";
	elementToShow.style.opacity = "100%";
	elementToShow.style.zIndex = "1";
}

hs.graphicsDir = 'css/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.wrapperClassName = 'white borderless floating-caption';
hs.fadeInOut = true;
hs.dimmingOpacity = .75;

// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 3000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .6,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});