



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />







<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />



	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />



<link type="text/css" href="css/styles.css" rel="stylesheet" />

<!-- <link type="text/css" href="css/style.min.css" rel="stylesheet" />

<link type="text/css" href="css/style.css" rel="stylesheet" />

 -->

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>



<meta name="viewport" content="width=device-width, initial-scale=1.0" />







 <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



  <script src="/js/min.js"></script>



   <script defer src="js/jquery.flexslider.js"></script> 

   

     





      <script src="/js/custom.js"></script>

     



    </head>







<title>RoundArk</title>







<div class="scroll-top"><img src="/images/top-bottom.png" width="40" height="40" alt="top to bottom" /></div>











<div class="top top-bg">



<div class="container">



<div class="master">



<div class="top-right-part">



<ul>



  <li>







 <div class="tabs"> <ul class="tab-links flag-container">



        <li class="active"><a href="#tab1"></a></li><!--uk-->



        <li><a href="#tab2"></a></li><!--us-->



        <li><a href="#tab3"></a></li><!--australia-->



        <li><a href="#tab4"></a></li><!--india-->



    </ul>



    



    <div class="tab-content">



<div id="tab1" class="tab">



+44 2030 263 718



</div>



<div id="tab2" class="tab">



+1 732 210 6162</div>



<div id="tab3" class="tab">







+61 3903 93741



</div>







<div id="tab4" class="tab active">



+91 9211303330



</div>







</div>







</div>



  



  



</li>



 



  <li class="contact-us"><a href="/contact-us.php">CONTACT US</a></li>



  </ul>



  </div>



  </div>



</div>



</div>











<div class="top logo-bg">



<div class="container">



<div class="master">



<div class="logo">



<a href="http://www.roundark.com/"><img src="/images/logo.png" alt="logo" /></a></div>







<div class="navigation">



<div class="menu-icon"><img src="images/menu-icon.png" width="30" height="30" alt="Menu" /></div>







<ul>







<li><a href="http://www.roundark.com/digital-marketing.php">Digital</a></li>



<li><a href="http://www.roundark.com/digital-strategy.php">Strategy</a></li>



<li><a href="http://www.roundark.com/technology.php">Technology</a></li>



<li><a href="http://www.roundark.com/social-media-marketing.php">Social</a></li>







<li><a href="/mobile-marketing.php">Mobile</a></li>



<li><a href="/about-us.php">About Us</a></li>







</ul>



</div>



</div>



</div>



</div>















<p style="position:relative;">







<div id="light" class="white_content">







<div class="text-center">







<div class="cent">







<script type="text/javascript">







  function validateCallForm(){







    var callname = document.forms['callForm']['callname'].value;



    var callmessage = document.forms["callForm"]["callmessage"].value;



    var callphone = document.forms["callForm"]["callphone"].value;



 



     



    if (callname == null || callname == "") {



        document.getElementById("error-msg").innerHTML = "Please Enter your Name";



        document.getElementById("callname").focus();



        return false;



    }







    if (!/^[a-zA-Z ]*$/g.test(callname)) {



        document.getElementById("error-msg").innerHTML = "In-Valid Name";



        document.getElementById("callname").focus();



        return false;



    }







       







    if (callphone == null || callphone == "") {



        document.getElementById("error-msg").innerHTML = "Please Enter your Mobile Number";



        document.getElementById("callphone").focus();



        return false;



    }







     if (isNaN(callphone) || callphone.length != '10') {



        document.getElementById("error-msg").innerHTML = "Invalid Mobile Number";



        document.getElementById("callphone").focus();



        return false;



    }







    if (callmessage == null || callmessage == "") {



        document.getElementById("error-msg").innerHTML = "Write your Message.";



        document.getElementById("callmessage").focus();



        return false;



    }







  }











  </script>



















<p id="error-msg" style="text-align: center;color: red;font-size: 12px;"></p> 



<form name="callForm" id="callForm"  action="callAction.php" method="post">



<div class="name"><label>Name:</label> <input name="callname" id="callname" type="text" /></div>



<div class="name"><label>Mobile Number:</label><input name="callphone" id="callphone" type="text" maxlength="10" /></div>



<div class="comments"><label>Message:</label>



<textarea name="callmessage" id="callmessage" cols="25" rows="4"></textarea></div>



<div class="submit-button"><input onclick="return validateCallForm()" type="submit" value="Submit" /></div>







</form>







 <script>



    



    $("#callForm").submit(function(event) 



     {



        console.log('Call........');



         /* stop form from submitting normally */



         event.preventDefault();







         /* get some values from elements on the page: */



         var $form = $( this ),



             $submit = $form.find( 'input[type="submit"]' ),



             name_value = $form.find( 'input[name="callname"]' ).val(),



             phone_value = $form.find( 'input[name="callphone"]' ).val(),



             message_value = $form.find( 'textarea[name="callmessage"]' ).val(),



             url = $form.attr('action');







         /* Send the data using post */



         var posting = $.post( url, { 



                           callname: name_value, 



                           callphone: phone_value, 



                           callmessage: message_value,



                           



                       });







         posting.done(function( data )



         {



             /* Put the results in a div */



             $( "#error-msg" ).html(data);



             $("#error-msg").css({"color":"green","font-size":"14"});



            // $('.send').prop('disabled', true);







             /* Change the button text. */



             $submit.val('Sent, Thank you');







             /* Disable the button. */



             $submit.attr("disabled", true);



         });



    });



</script>











<a class="close-button" href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">X</a>







</div>







</div>







</div>











<!--<a class="click-button" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" href="javascript:void(0)">Call Back</a>-->







</p>







<div id="fade" class="black_overlay"></div>





