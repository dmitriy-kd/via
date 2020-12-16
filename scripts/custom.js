$('.slider-gallery-1').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  asNavFor: '.slider-gallery-2',
  responsive: [{
	  breakpoint: 480,
	  settings: {
		  dots: false
	  }
  }]
});

$('.slider-gallery-2').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  asNavFor: '.slider-gallery-1',
  responsive: [{
	  breakpoint: 480,
	  settings: {
		  dots: false
	  }
  }]
});