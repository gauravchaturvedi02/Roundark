jQuery(document).ready(function(){
    jQuery('.tabs .tab-links a').click(function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
    e.preventDefault();
  });
 });
 
 

  <!-- FlexSlider -->

    /*jQuery(function(){
      SyntaxHighlighter.all();
    });*/
    jQuery(window).load(function(){
      jQuery('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
    });
    /*code of text fade in rotation*/
    jQuery(document).ready(function(){
      var counter=1;
      var texts=jQuery('.rotate');
      setInterval(function(){
        jQuery(texts).hide();
        jQuery(texts[counter++%5]).fadeIn('slow');
        //counter++;
        /*if(counter==4)
          counter=0;*/
        //console.log(counter);
      },3000);
    })
	
	jQuery(window).scroll(function() {
 if (jQuery(this).scrollTop() > 200){  
    jQuery('.top.logo-bg').addClass("sticky");
  }
  else{
    jQuery('.top.logo-bg').removeClass("sticky");
  }
});
 <!--Fix header-->
 

jQuery(document).ready(function(){
    jQuery(".our-story-text-colum-scroll").click(function(){
        jQuery(".our-story-text-columtop").toggleClass("auto-height");
    });

 
       jQuery(window).scroll(function(){
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.scroll-top').fadeIn();
            } else {
                jQuery('.scroll-top').fadeOut();
            }
        });
 
        jQuery('.scroll-top').click(function(){
            jQuery("html, body").animate({ scrollTop: 0 }, 900);
            return false;
        });
		
		
		
		 jQuery(".menu-icon").click(function(){
        jQuery(this).next().slideToggle();
    });



if(jQuery( window ).width() < 768 ){
		 jQuery(".footer-col h4 ").click(function(){
        jQuery(this).next().slideToggle();
    });
}
else{
	
}


/*
jQuery(".col-block-new .text-block .know-button").click(function(){
    jQuery(this).parent().next().toggle(1000);

});


     

	var divheight = jQuery('.col-block-new .picture').height();
	 jQuery('.col-block-new .Content-Part').css('height', divheight);

 
 
 
 jQuery(".pattern .row.Team-member .col .know-button").click(function(){
    jQuery(this).parent().next().toggle(1000);

});


	var divheight2 = jQuery('.pattern .row.Team-member .col .picture').height();
	 jQuery('.pattern .row.Team-member .col .Content-Part').css('height', divheight2);

 
*/

 
 
});


//Equal Height Script
jQuery(document).ready(function(){

if(jQuery( window ).width() > 480 ){
    var highestBox = 0;
        jQuery('.blog-new .blog').each(function(){  
                if(jQuery(this).height() > highestBox){  
                highestBox = jQuery(this).height();  
        }
    }); 
	   
    jQuery('.blog-new .blog').height(highestBox);
} 
  

	
/*ackup

jQuery('.tabs-new .tab-links a').click(function(e)  
{
    var currentAttrValue = jQuery(this).attr('href');
 
    //alert(jQuery(this).parent('li').attr('class'));

    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

    jQuery('.tabs-new ' + currentAttrValue).show().siblings().hide();

    e.preventDefault();
});
*/
/*Tab new */

var currentAttrValue = "";

jQuery('.tabs-new .tab-links a').click(function(e)  
{
    if(currentAttrValue == jQuery(this).attr('href'))
    {
        jQuery(".tabs-new .tab-content").slideToggle(500);
    }
    else
    {
        currentAttrValue = jQuery(this).attr('href');
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
        jQuery('.tabs-new ' + currentAttrValue).show(500).siblings().hide();
        jQuery(".tabs-new .tab-content").show(500);
    }
    e.preventDefault();
});

/*Tab new */

/*jQuery(".tabs-new .tab-links a").click(function(){
        jQuery(".tabs-new .tab-content").slideToggle(500);
        
    });*/


//start new menu toggle code added by afsana
/*jQuery(function ($) 
{
    var $bgs = $('.menu-toggle');
    $('.menu-item').click(function () 
    {
        var $target = $($(this).data('target')).stop(true).slideToggle();
        $bgs.not($target).filter(':visible').stop(true, true).slideUp();
    })
});*/
//end new menu toggle code added by afsana



 
     });
	
	 
//Accordian
jQuery(document).ready(function(){
    function close_accordion_section() {
        $('.accordion-new .accordion-section-title').removeClass('active');
        $('.accordion-new .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-new  .accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion-new ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
	
	
	
	
	    });


