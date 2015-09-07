<?php
/**
 * @package gridz
 */
?>
    </div> <!-- End of content wrapper -->
</div> <!-- End of content -->
<footer id="footer">
    <div class="wrapper">
        <?php if(!is_404()) get_sidebar('footer'); ?>
        <div id="footer-credits">         
          
            <?php gridz_footer_credit(); ?>
       <div id="social-csjh">
          <a href="https://www.facebook.com/pages/Bad-Clay-Studio/599409306760109?ref=ts&fref=ts"  id="social-profile-face">
            <span class="genericon-face"></span>
          </a>
          <a href="http://www.linkedin.com/company/badclay-studio?trk=top_nav_home" id="social-profile-in">
            <span class="genericon-in"></span>
          </a>
          </div>
          <p>Designed and developed by <a style="color:#be0000 ;text-decoration: none;" TARGET="_blank" href="https://www.behance.net/ice-studio">ICE</a></p>
        </div>
    </div>
</footer>
<a id="scroll-up" href="javascript:void(0)"><span class="genericon-uparrow"></span></a>
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery('.block-menu').find('a').each(function(){
  var el = jQuery(this),
  elText = el.text();
  el.addClass("three-d");
  el.append('<span aria-hidden="true" class="three-d-box"><span class="front">'+elText+'</span><span class="back">'+elText+'</span></span>');

  });
 jQuery(window).bind('scroll', function() {

if(jQuery('body').hasClass('home')){
   jQuery('#navigation').removeClass('fixed');
   if (jQuery(window).scrollTop() > 400) {
         jQuery('#navigation').addClass('fixed');
         jQuery('.home .fullwidth').css('margin-top','0px')
     }
     else {
         jQuery('#navigation').removeClass('fixed');
          jQuery('.home .fullwidth').css('margin-top','-100px')
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
    itemWidth: 200,
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

  jQuery('.carousel123').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 10,
    minItems: 2,
    maxItems: 4
  });

// var title=jQuery('#title-page').text()
// alert( jQuery('#title-page-js').html( title ))
//  jQuery('#title-page-js').html( title );
})


</script>
</body>
</html>