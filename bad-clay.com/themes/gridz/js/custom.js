jQuery(document).ready(function(){
	jQuery('.block-menu').find('a').each(function(){
	var el = jQuery(this),
	elText = el.text();
	el.addClass("three-d");
	el.append('<span aria-hidden="true" class="three-d-box"><span class="front">'+elText+'</span><span class="back">'+elText+'</span></span>');

	});
 jQuery(window).bind('scroll', function() {

if(jQuery('body').hasClass('home')){
   if (jQuery(window).scrollTop() > 550) {
         jQuery('#navigation').addClass('fixed');
     }
     else {
         jQuery('#navigation').removeClass('fixed');
     }

}else{
   if (jQuery(window).scrollTop() > 0) {
           jQuery('#navigation').addClass('fixed');
           jQuery('.grid-col-3 header').find('h1').addClass('fixed-1');
       }
   else {
       jQuery('#navigation').removeClass('fixed');
        jQuery('.grid-col-3 header').find('h1').removeClass('fixed-1');
   }
}
      
  });

    var $container = jQuery(".project-container");
    $container.imagesLoaded(function() {
    $container.masonry({
    itemSelector: ".grid",
    singleMode :true,
    isAnimated: true
    });
    });

  // The slider being synced must be initialized first
  jQuery('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  jQuery('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });

// var title=jQuery('#title-page').text()
// alert( jQuery('#title-page-js').html( title ))
//  jQuery('#title-page-js').html( title );
})


</script>