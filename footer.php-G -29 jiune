<!--New Footer Start-->
<link
<?php
define('WP_USE_THEMES', false);
require_once ('blog/wp-config.php');
require ('../blog/wp-load.php');
?>
<div class="top blog-new-bg">
<div class="container">
<div class="master">
<div class="blog-new">

<?php

 $args =array('taxonomy'=>'category','post_type'=>'post','post_status'=>'publish','posts_per_page'=>'6','category_name'=>'Blog');

// The Query
$query = new WP_Query( $args );

//print_r($query);


// The Loop
if ( $query->have_posts() ) {
  echo '<div class="blog-new">';
  while ( $query->have_posts() ) {
    $query->the_post();
    //$mycontent = get_the_content();
    echo '<div class="blog">';
    echo '<h5>blog</h5>';
    echo '<h3><a href="'.get_permalink().'">' . get_the_title() . '</a></h3>';
    if($_SERVER["REQUEST_URI"] == '/' )
    {
    echo '<p>' .wp_trim_words( get_the_content(), 25 ).'</p>';
     }
    echo  '<div class="time">'.get_the_date().'</div>';
    echo '</div>';
  }
  echo '</div>';
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>






</div>











</div>



</div>



</div>











<div class="top footertop">



<div class="container">



<div class="master">



<div class="footer-row">







<div class="widgets">







<div class="block">



<a class="iconss" href="https://twitter.com/roundark"></a> 











           <a class="twitter-timeline"  href="https://twitter.com/roundark" data-widget-id="725973252296826881">Tweets by @roundark</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          



</div>







<div class="block">



<a class="iconss" href="https://www.facebook.com/RoundArk-1715117815437003/"></a> 







<div id="fb-root"></div>





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






<div class="fb-page" data-href="https://www.facebook.com/RoundArk-1715117815437003/" data-tabs="timeline" data-width="490" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>











</div>































</div>







<div class="right-part">



<div class="first-row">



<div class="footer-col">



<h4>Our Company</h4>







<ul>



<li><a href="/partners.php">Partners</a></li>



<li style="display:none;"><a href="#">Global Operations</a></li>



<li><a href="/our-locations.php">Our Locations</a></li>



<li><a href="/career-with-us.php">Careers</a></li>



<li><a href="/event-gallery.php">Event Gallery</a></li>







</ul>



</div>



<div class="footer-col">



<h4>Industries We Serve</h4>











<ul>



<li><a href="/retail-industry.php">Retail Industry</a></li>



<li><a href="/finance-insurance.php">Finance & Insurance</a></li>



<li><a href="/travelling-hospitality.php">Travel & Hospitality</a></li>



<li><a href="/media-publishing.php">Media & Publishing</a></li>



<li><a href="/smb.php">Small Mid-Sized Businesses</a></li>



</ul>



</div>



<div class="footer-col">



<h4>Resources</h4>



<ul>



<li><a href="/free-tools.php">Free Tools</a></li>



<li style="display:none;"><a href="#">Research and Guides</a></li>



<li><a href="/blog">Our Blog</a></li>



</ul>



</div>



<div class="footer-col">



<h4>Offering</h4>







<ul>



<li><a href="/digital-strategy.php">Digital Strategy</a></li>



<li><a href="/digital-marketing.php">Digital Marketing</a></li>



<li><a href="/customer-engagement.php">Customer Engagement</a></li>



<li><a href="/content-marketing.php">Digital Engagement</a></li>



<li><a href="/digital-marketing-agency.php">Digital Agency</a></li>



<li><a href="/mobile-responsive-web-design.php">Mobile and Responsive Web</a></li>



<li><a href="cloud-solution.php">Cloud</a></li>



<li><a href="/crm-integration.php">CRM & Integrations</a></li>



<!--<li><a href="enterprise-digital-engagement.php">Enterprise Digital Engagement</a></li>-->



<li><a href="/ecommerce-portal-development.php">eCommerce & Portals</a></li>



<li><a href="/erp-integration.php">ERP & Integrations</a></li>







</ul>



</div>



















</div>







<div class="second-row">







<div class="cols1">







  <img src="/images/world-map.png" alt="Map"></div>



 



 <div class="cols2">



 <p><span>+442030263718</span></p>



  <p><span>+17322106162</span></p>



   <p><span>+61 3903 93741</span></p>



    <p><span>+91 9211303330</span></p>



 



 



 



 </div> 



 



 <div class="newsletter">



 <h4>receive our newsletter</h4>



 <script type="text/javascript">



 function validatenForm() {



   var nemail = document.forms["newsletter"]["news_email"].value;







   if (nemail == null || nemail == "") {



        document.getElementById("error-msg1").innerHTML = "Please Enter your Email";



        document.getElementById("news_email").focus();



        return false;



    }



    var atpos = nemail.indexOf("@");



    var dotpos = nemail.lastIndexOf(".");



    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=nemail.length) {



        document.getElementById("error-msg1").innerHTML = "Please Enter a Valid Email Id";



        document.getElementById("news_email").focus();



        return false;



    }



}



 </script>



















 <p id="error-msg1" style="color: red;font-size: 12px;width: 70%;"></p> 



 <form name="newsletter" id="newsletter" action="footerAction.php" method="post"> 



 <input name="news_email"  id="news_email" placeholder="Email address"/>



 <button  onclick="return validatenForm()" name="submit" type="submit">sign up</button>



 </form>



 </div>











 <script>



    



    $("#newsletter").submit(function(event) 



     {



        console.log('newsletter form');



         /* stop form from submitting normally */



         event.preventDefault();







         /* get some values from elements on the page: */



         var $form = $( this ),



             $submit = $form.find( 'button[type="submit"]' ),



             email_value = $form.find( 'input[name="news_email"]' ).val(),



             



             url = $form.attr('action');







         /* Send the data using post */



         var posting = $.post( url, { 



                           news_email: email_value                           



                       });







         posting.done(function( data )



         {



             /* Put the results in a div */



             $( "#error-msg1" ).html(data);



             $("#error-msg1").css({"color":"green","font-weight":"bold","background-color": "wheat"});



            // $('.send').prop('disabled', true);







             /* Change the button text. */



            // $submit.text('Sent, Thank you');







             /* Disable the button. */



             $submit.attr("disabled", true);



         });



    });



</script>











</div>



</div>



</div>







<div class="footer-row copyrightnew">


<div class="left">&copy;Copyright 2010 - 2016 Round Ark Limited</div>
<div class="right social-icoons ">
<a href="https://www.facebook.com/RoundArk-1715117815437003/"><img src="/images/social1.png" width="" height="" alt="Social icon" /></a>
<a href="https://plus.google.com/u/0/113190470062472648528/posts?hl=en"><img src="/images/social22.png" width="" height="" alt="Social icon" /></a>
<a href="https://twitter.com/roundark"><img src="/images/social3.png" width="" height="" alt="Social icon" /></a>
<a href="https://www.youtube.com/channel/UCP32mKYpU243dLGyAyBPHoA"><img src="/images/social4.png" width="" height="" alt="Social icon" /></a>
<a href="https://www.instagram.com/roundark/"><img src="/images/social5.png" width="" height="" alt="Social icon" /></a>
<a href="https://www.pinterest.com/roundark/"><img src="/images/social6.png" width="" height="" alt="Social icon" /></a>


</div>










</div>



</div>



</div>



</div>



</div>











<!--New Footer End-->


<!----Analytic code-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77045404-1', 'auto');
  ga('send', 'pageview');

</script>



<!----Analytic code-->


 <script defer src="js/scrollreveal.min.js"></script> 
  <script defer src="js/scrollreveal.js"></script> 






