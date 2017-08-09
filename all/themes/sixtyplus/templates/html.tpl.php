 <?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
<!--Script from NIH for analytics-->
<script src="//assets.adobedtm.com/f1bfa9f7170c81b1a9a9ecdcc6c5215ee0b03c84/satelliteLib-4b219b82c4737db0e1797b6c511cf10c802c95cb.js"></script>
<!--//Script from NIH for analytics-->

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />-->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">-->
  <?php print $styles; ?>
  <?php print $scripts; ?>
     <?php //include("./sites/all/themes/sixtyplus/js/interactive/tablesorter-master/js/jquery.tablesorter.js"); ?>   
      <?php //include("./sites/all/themes/sixtyplus/js/interactive/tablesorter-master/js/jquery.tablesorter.widgets.js"); ?>
      
      
         <?php //include("./sites/all/themes/sixtyplus/js/jquery.leavenotice.js"); ?> 
  <?php //include("./sites/all/themes/sixtyplus/js/jquery-exit-confirm-dot-org.js"); ?>  
  
  
<script type="text/javascript"> 
//  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
//
//  ga('create', 'UA-76106565-1', 'auto');
//  ga('send', 'pageview');

</script>



<!--  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->
  

  



    <!-- include the jQuery Mobile code -->

  <!--<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<style>

/* The Overlay style (background) */
.overlay-survey{
    /*background:transparent url(images/overlay.png) repeat top left;*/
	
    position:fixed;
    top:0px;
    bottom:0px;
    left:0px;
    right:0px;
    z-index:99991;
	
	background:transparent;
	background-color: rgb(0,0,0); /* Black fallback color */
    background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
 	overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal)*/ 
}

.box{
    position:fixed;
    top:-200px;
    left:30%;
    right:30%;
    background-color:#fff;
    color:#7F7F7F;
    padding:20px;
    border:2px solid #ccc;
    -moz-border-radius: 20px;
    -webkit-border-radius:20px;
    -khtml-border-radius:20px;
    -moz-box-shadow: 0 1px 5px #333;
    -webkit-box-shadow: 0 1px 5px #333;
    z-index:9999;
}


a.boxclose{
    float:right;
    width:26px;
    height:26px;
    background:transparent url(images/cancel.png) repeat top left;
    margin-top:-30px;
    margin-right:-30px;
    cursor:pointer;
}

.box h1{
    border-bottom: 1px dashed #7F7F7F;
    margin:-20px -20px 0px -20px;
    padding:10px;
    background-color:#FFEFEF;
    color:#EF7777;
    -moz-border-radius:20px 20px 0px 0px;
    -webkit-border-top-left-radius: 20px;
    -webkit-border-top-right-radius: 20px;
    -khtml-border-top-left-radius: 20px;
    -khtml-border-top-right-radius: 20px;
}
/* //The Overlay style (background) */

</style>

<style>
#confirmOverlay{
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	/*background:url('ie.png');*/
	background: -moz-linear-gradient(rgba(11,11,11,0.1), rgba(11,11,11,0.6)) repeat-x rgba(11,11,11,0.2);
	background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(11,11,11,0.1)), to(rgba(11,11,11,0.6))) repeat-x rgba(11,11,11,0.2);
	z-index:100000;
}

.confirmBox{
	background:/*url('body_bg.jpg') repeat-x left bottom*/ #e5e5e5;
	width:460px;
	position:fixed;
	left:50%;
	top:50%;
	margin:-130px 0 0 -230px;
	border: 1px solid rgba(33, 33, 33, 0.6);
	
	-moz-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	-webkit-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
}

.confirmBoxHeight{

	top:40%;


}




.confirmBox h1,
.confirmBox p{
	font:26px/1 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	/*background:url('header_bg.jpg') repeat-x left bottom #f5f5f5;*/
	padding: 18px 25px;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.6);
	color:#666;
}

.confirmBox h1{
	letter-spacing:0.3px;
	color:#888;
}

.confirmBox p{
	background:none;
	font-size:16px;
	line-height:1.4;
	padding-top: 35px;
}

.confirmButtons{
	padding:15px 0 25px;
	text-align:center;
}

.confirmBox .button{
	display:inline-block;
	/*background:url('buttons.png') no-repeat;*/
	color:white;
	position:relative;
	height: 33px;
	
	font:17px/33px 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
	
	margin-right: 15px;
	padding: 0 35px 0 40px;
	text-decoration:none;
	border:none;
}

.confirmBox .cbp{
		margin-right: 0px;
}

.confirmBox .button:last-child{	margin-right:0;}

.confirmBox .button span{
	position:absolute;
	top:0;
	right:-5px;
	/*background:url('buttons.png') no-repeat;*/
	width:5px;
	height:33px
}

.confirmBox .blue{				background-position:left top;text-shadow:1px 1px 0 #5889a2; background-color: #000;}
.confirmBox .blue span{			background-position:-195px 0;}
.confirmBox .blue:hover{		background-position:left bottom;}
.confirmBox .blue:hover span{	background-position:-195px bottom;}

.confirmBox .gray{				background-position:-200px top;text-shadow:1px 1px 0 #707070; background-color: #000;}
.confirmBox .gray span{			background-position:-395px 0;}
.confirmBox .gray:hover{		background-position:-200px bottom;}
.confirmBox .gray:hover span{	background-position:-395px bottom;}



@media only screen and (min-width: 0px) and (max-width: 767px) {
.confirmBox{
	background:/*url('body_bg.jpg') repeat-x left bottom*/ #e5e5e5;
	width:90%;
	position:fixed;
	left:5%;
	top:30%;
	margin:-130px 0 0 0px;
	border: 1px solid rgba(33, 33, 33, 0.6);
	
	-moz-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	-webkit-box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
	box-shadow: 0 0 2px rgba(255, 255, 255, 0.6) inset;
}	

.confirmBox .button {
    display: inline-block;
    /* background: url(buttons.png) no-repeat; */
    color: white;
    position: relative;
    height: 33px;
    font: 17px/33px 'Cuprum','Lucida Sans Unicode', 'Lucida Grande', sans-serif;
    margin-right: 0px;
    padding: 0 35px 0 40px;
    text-decoration: none;
    border: none;
}
.confirmBox .button:last-child {
    margin: 10px;
}
}
</style>

<style type="text/css">

	#exitpopup
	{
		text-align:center;
	}

	#exitpopup h1
	{
		margin-top:0px;
		padding-top:0px;
		
	}	
	
	#exitpopup p
	{
		text-align:left;
	}

</style>

<style>
/*https://webdesignerhut.com/create-an-exit-intent-popup-window/*/
.lightbox-survey {
    /** Hide the lightbox */
	
	display:none;

    /** Apply basic lightbox styling */
    position: fixed;
    z-index: 99991;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    color:#333333;
	background: transparent;
  
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
	overflow-y: hidden;
    }

.lightbox-survey:after {
    content: '';
    display: table;
    clear: both;
}
	
	
.lightbox-survey .t-box {
    width: -webkit-min-content;
    width: -moz-min-content;
    width: min-content;
    min-width: 60%;
    margin: 2% auto;
    padding: 5px;
    background-color: #FFF;
    box-shadow: 0px 1px 26px -3px #777777;
    min-height: 600px;
}

    .lightbox-survey .title-survey {
        margin:0;
        padding:0 0 10px 0px;
        border-bottom:1px #ccc solid;
        font-size:22px;
        }

    .lightbox-survey .content-survey {
        display:block;
        padding:10px 0 0 0px;
        font-size:18px;
        line-height:22px;
        }

    .lightbox-survey .close-survey {
        float:right;
        display:block;
        text-decoration:none;
        font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size:22px;
        color:#858585;
        }

.lightbox-survey .open-survey {
    /** Show lightbox when mouse leaves the browser window */
    display: block;
    outline: none;
}





@media only screen and (min-width: 0px) and (max-width: 767px) {

.lightbox-survey .t-box {
    width: -webkit-min-content;
    width: -moz-min-content;
    width: min-content;
    min-width: 90%;
    margin: 8% auto;
    padding: 5px;
    background-color: #FFF;
    box-shadow: 0px 1px 26px -3px #777777;
    min-height: 600px;
}

.lightbox-survey .content-survey {
    display: block;
    padding: 30px 0 0 0px;
    font-size: 18px;
    line-height: 22px;
}
}


@media only screen and (min-width: 768px) and (max-width: 991px) {

.lightbox-survey .t-box {
    width: -webkit-min-content;
    width: -moz-min-content;
    width: min-content;
    min-width: 90%;
    margin: 8% auto;
    padding: 5px;
    background-color: #FFF;
    box-shadow: 0px 1px 26px -3px #777777;
    min-height: 600px;
}

.lightbox-survey .content-survey {
    display: block;
    padding: 30px 0 0 0px;
    font-size: 18px;
    line-height: 22px;
}
}
</style>



<style>
#iframecontainer {
    width: 98%;
    height: 540px;
    display: none;
    position: relative;
    margin-top: 2%;
    margin-left: 1%;
    background: #FFF;
    border: 1px solid #666;
    border: 1px solid #555;
    box-shadow: 1px 2px 0px #222;
    z-index: 999999;
    /* top: 0; */
    /* bottom: 0; */
    /* left: 0; */
    /* right: 0; */
}
#iframecontainer #iframe-survey {display: none; width: 100%; height: 100%; position: absolute; border: none; }
#loader-iframe{background: #03C; background-repeat:no-repeat;  width: 250px; height: 250px; margin:auto;}
#block {background: #000; opacity:0.6;  position: fixed; width: 100%; height: 100%; top:0; left:0; display: block;}​
</style>

<style>
.scrollbar-measure {
	width: 100px;
	height: 100px;
	overflow: scroll;
	position: absolute;
	top: -9999px;
}

</style>
<style>


.smcx-modal {
    width: 98%;
    max-width: 815px;
    height: 610px;
    margin-left: -407.5px !important;
    margin-top: -305px !important;
    background: #706F65;
}
.smcx-modal>.smcx-modal-content {
    width: 795px;
    height: 540px;
}

</style>


<style>

#popup-noti-bar {
display:none;
top: 70px;
width: 100%;
padding: 10px;
background-color: #ff8f09;
display: block;
position: fixed;
z-index:1001;
}


.popup-noti-bar-resp1 {
    display: block;
    top: 85px;
}


#popup-noti-bar p {
    margin-left: 15px;
    /*text-shadow: 0 1px 1px rgba(255,255,255,0.8);*/
    font-size: 1.3em;
    color: #000000;
    font-weight: bold;
}
#popup-noti-bar p a{
    color: #000000;
	text-decoration:none;

}
a.hide-noti-bar {
color: #34332d;
text-decoration: none;
font-family: 'ArrowFont';
-webkit-transform:rotate(-90deg);
font-size: 30px;
position: absolute;
text-shadow: -1px 0px 1px rgba(255,255,255,0.8);
margin-top: -10px;
}


a.hide-noti-bar:hover {
color: #c44f21;
}

span.show-noti-bar {
display: block;
position: fixed;
-webkit-transform:rotate(90deg);
margin-top: 70px;
}


a.show-noti-link {
background: #dde1c1;
padding: 5px 10px 5px 40px;
font-family: 'ArrowFont';
font-size: 30px;
margin-left: 5px;
border: 4px solid #c44f21;
text-decoration: none;
border-radius: 10px;
-webkit-background-clip: padding-box;
color: #34332d;
}



@media only screen and (min-width: 768px) and (max-width: 1199px) {
#popup-noti-bar {
display:none;
top: 90px;
width: 100%;
padding: 10px;
background-color: #ff8f09;
display: block;
position: fixed;
z-index:1001;
}
}


@media only screen and (min-width: 0px) and (max-width: 767px) {
#popup-noti-bar {
display:none;
top: 90px;
width: 100%;
padding: 10px;
background-color: #ff8f09;
display: block;
position: fixed;
z-index:1001;
}
}

</style>

 
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<!-- popup-noti-bar -->
<div id="popup-noti-bar" style="display:none;">
<!--	<span class="hide-noti-bar">
		<a href="#" class="hide-noti-bar">C</a>
	</span>-->
	<p><a href="#">Please click here to share your feedback when ready.<!--Click here to share your feedback.--></a></p>
</div>

<!--<span class="show-noti-bar">
	<a href="#" class="show-noti-link">C</a>
</span>-->

<!-- popup-noti-bar -->

<!-- The overlay -->
<div class="overlay-survey" id="overlay" style="display:none;">
    <div class="confirmBox" id="confirmBox">

        <h1>Share your feedback!</h1>
        <p>Thank you for visiting the Smokefree 60+ website. You have been selected to participate in a brief customer satisfaction survey to help us understand how we can improve your experience with the Smokefree 60+ website. Completion of this survey is voluntary.</p>

        <div class="confirmButtons">
            
            <a class="button gray" id="gray" href="#">No, thank you.<span></span></a>
            <a class="button blue" id="blue" href="#">Yes, I'll share feedback.<span></span></a>
        </div>
    </div>
</div>
<!-- //The overlay -->

<!-- The overlay 2-->
<div class="overlay-survey" id="overlay2" style="display:none;">
    <div class="confirmBox confirmBoxHeight" id="confirmBox2">

        <h1></h1>
        <p>Thank you for agreeing to provide feedback. We estimate that it will take about 4 minutes to complete this survey. Please select when you would like to take the survey.</p>

        <div class="confirmButtons">
            
            <a class="button gray" id="gray2" href="#">Take the survey now. <span></span></a>
            <a class="button blue" id="blue2" href="#">Take the survey in a few minutes.<span></span></a>
        </div>
    </div>
</div>
<!-- //The overlay 2-->

<!-- The overlay 3-->
<div class="overlay-survey" id="overlay3" style="display:none;">
    <div class="confirmBox" id="confirmBox3">

        <h1></h1>
        <p>Are you ready to take the survey?</p>

        <div class="confirmButtons">
            
            <a class="button gray cbp" id="gray3" href="#">Take the survey now. <span></span></a>
            <a class="button blue" id="blue3" href="#">Take the survey later.<span></span></a>
        </div>
    </div>
</div>
<!-- //The overlay 3-->

<!-- The overlay final -->
<div class="overlay-survey" id="overlay4" style="display:none;">
    <div class="confirmBox" id="confirmBox4">

        <h1></h1>
        <p>When you are ready to take the survey, please click on the orange bar at the top of the page underneath the blue menu bar. Thank you for sharing your feedback.</p>

        <div class="confirmButtons">
            
            <a class="button gray" id="gray4" href="#">Close<span></span></a>
            
        </div>
    </div>
</div>
<!-- //The overlay final -->

<!-- dont leave -->
<div class="lightbox-survey" id="survey-box">
    <div class="t-box">
        <a class="close-survey" href="#">X</a>
        <!-- your title -->
       
        <div class="content-survey">
        <!-- your content -->
                       <div id="iframecontainer">
                            <!--<div id="loader-iframe"></div>-->
                            <iframe id="iframe-survey"></iframe>
                	   </div>​
<!--<div style="text-align:center;"><a class="survey-go-link" href="https://www.surveymonkey.com/r/V6TVBZ3" target="_blank">Link to survey</a></div>-->
        </div>
    </div>
</div>
<!-- //dont leave -->



<!-- SKIP LINK -->

    <a class="skip-main" href="#navskip">Skip to main content</a>

              
 <!--<div id="skip-main" tabindex="-1"></div>-->
   <!-- //SKIP LINK -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <a href="#" class="cd-top"><div><span style="font-family:Arial, Helvetica, sans-serif; font-size:inherit;">TOP</span></div><div><i class="fa fa-arrow-circle-up fa-3x"></i></div></a>
  <!-- INTERNAL PAGE SCRIPTS: MAIN -->
  <?php //include("./sites/all/themes/sixtyplus/js/survey-dialog/jquery.confirm.js"); ?>
  <?php include("./sites/all/themes/sixtyplus/js/js-enabled.js"); ?>
  <?php include("./sites/all/themes/sixtyplus/js/jquery-scroll-top.js"); ?>  
    <?php include("./sites/all/themes/sixtyplus/js/jquery-skip-nav.js"); ?>  


  <?php //include("./sites/all/themes/sixtyplus/js/text-size-script/text-size-inc-dec.js"); ?>
  
  <?php include("./sites/all/themes/sixtyplus/js/jquery-keyboard-accessibility.js"); ?>
  <?php include("./sites/all/themes/sixtyplus/js/fix-menu-shadow/fms.js"); ?>
  <?php //include("./sites/all/themes/sixtyplus/js/interactive/quit-plan/todays-date.js"); ?>
  
      <?php include("./sites/all/themes/sixtyplus/js/search-expand/modernizr.custom.js"); ?>
      <?php include("./sites/all/themes/sixtyplus/js/search-expand/EventListener.js"); ?>
      
    <?php include("./sites/all/themes/sixtyplus/js/search-expand/classie.js"); ?>
    <?php include("./sites/all/themes/sixtyplus/js/search-expand/uisearch.js"); ?>
        <?php include("./sites/all/themes/sixtyplus/js/search-expand/search-expand-nizer.js"); ?>
         <?php include("./sites/all/themes/sixtyplus/js/jquery-skip-to-2.js"); ?>
        

  <?php include("./sites/all/themes/sixtyplus/js/jquery-exit-confirm-dot-org-dot-com.js"); ?>  
  <?php include("./sites/all/themes/sixtyplus/js/survey-dialog/survey-dialog-script.js"); ?>  
  
  <!-- Google analytics Events: Caurousel -->
<script type="text/javascript"> 
jQuery("#carouselOne").on('click', function() {

	ga('send', 'event', 'CarouselShow', 'Clicked', 'Carousel_1');
});

jQuery("#carouselTwo").on('click', function() {

	ga('send', 'event', 'CarouselShow', 'Clicked', 'Carousel_2');
});

jQuery("#carouselThree").on('click', function() {

	ga('send', 'event', 'CarouselShow', 'Clicked', 'Carousel_3');
});

jQuery("#carouselFour").on('click', function() {

	ga('send', 'event', 'CarouselShow', 'Clicked', 'Carousel_4');
});
      
        
</script>
  <!-- //Google analytics Events: Caurousel -->        
        
        
<script type="text/javascript"> 
//jQuery(document).ready(function(){
//// Create the measurement node
//var scrollDiv = document.createElement("div");
//scrollDiv.className = "scrollbar-measure";
//document.body.appendChild(scrollDiv);
//
//// Get the scrollbar width
//var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
//(scrollbarWidth); // Mac:  15
//
//// Delete the DIV 
//document.body.removeChild(scrollDiv);
//
//});

</script>      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<script type="text/javascript"> 
        	       jQuery(document).ready(function(){jQuery('#meditation_popup').popup({type: 'overlay', transition: 'all 0.3s', scrolllock: true});});
        
        </script>
        <script type="text/javascript"> 
jQuery(document).ready(function(){
var $ = jQuery.noConflict();
                   jQuery("#block-menu-menu-footer-3 ul.menu li a").click(function(){
                     window.open(this.href);
                     return false;
                     });
                   });
        
        </script>
<script type="text/javascript"> 
        	       jQuery(document).ready(function(){jQuery('#cigsubs_popup').popup({transition: 'all 0.3s'});});
        
        </script>
        <script type="text/javascript">
		
    function PrintPlus(pplus)
    {
        Popup(jQuery(pplus).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'Quitting Tools and Medications', 'height=1024,width=1024');
        mywindow.document.write('<html><head><title>Quitting Tools and Medications</title>');
/*        mywindow.document.write('<link rel="stylesheet" href="./sites/all/themes/sixtyplus/css/nrt-table-print.css" type="text/css" />');*/
		mywindow.document.write('<style>h2{font-size:1em; font-family: Arial, Helvetica, sans-serif;} table#tblResult{width: 1040px} #tblResult img{width:100px; height:auto;} #tblResult td{font-size:1em; font-family: Arial, Helvetica, sans-serif;} #tblResult p{font-size:1.1em; font-family: Arial, Helvetica, sans-serif;} .tablesorter-header-inner span{font-size:1em; font-family: Arial, Helvetica, sans-serif;} table.tablesorter tbody td{border-bottom: 1px solid #000; vertical-align: top;} table.tablesorter tbody th {border-bottom: 1px solid #000; vertical-align: top;} thead tr th {border-bottom: 1px solid #000;} .tablesorter-header-inner span h2{font-size: 1.2em;} .tablesorter-header-inner span span.subtext-thead {font-size: .8em;} #what-it-does{width: 225px;} #cost-nrt{width: 225px;} #how-nrt{width: 225px;} #effects-nrt{width: 225px;} #tblResult th{width:225px;} #tblResult td{width:225px;} #name-nrt td{width: 100px;} #tblResult h2{line-height:-0px;} #tblResult td p{line-height: 1.45em; margin-top:1px;} #tblResult th {vertical-align:top;}</style>');

        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>

<script type="text/javascript"> 
		  	
				
		  		
				
        	     jQuery(document).ready(function(){
					   var $ = jQuery.noConflict();
						   $('.ex-link').leaveNotice({
									siteName:"Smokefree.gov",
									timeOut:0
							});
					   
					   
					   
					});
        
</script>

<script type="text/javascript"> 
		  	
				
		  		
				
        	     jQuery(document).ready(function(){
					   var $ = jQuery.noConflict();
					   
					   $('label[for=edit-submitted-i-plan-to-quit-on-month-day-year]').detach();
					   
					   
					   if($(".preview")[0]){
					    $('.form-60plus label').detach();
					   }
			
					   
					});
        
</script>
<!--  <script type="text/javascript"> 
        	      /* jQuery(document).ready(function(){
					   
					   	jQuery("input[type='checkbox']#edit-submitted-tools-and-medications-fieldset-call-options-checkboxes-1,input[type='checkbox']#edit-submitted-tools-and-medications-fieldset-call-options-checkboxes-2").prop(
'disabled',true
);
					   
					   });
        */
</script>-->
<!--<script type="text/javascript"> 

	var $ = jQuery;
        	       $(document).ready(function(){
					   
					   	if($(".preview .webform-component--tools-and-medications-fieldset--other-tools-checkbox:not(:contains('Call a free quitline to talk to a counselor'))").length < 0) {
							
							$(".preview ul#call-quitlines").css({"display": "none"});
							//$(".preview ul#call-quitlines").prop('aria-hidden', 'true');
							
							}
					   
					   });
        
</script>-->

  <!-- // INTERNAL PAGE SCRIPTS: MAIN -->
  <!--[if lt IE 12]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript"> 
		  	
	jQuery(document).ready(function(){
var $ = jQuery.noConflict();
jQuery("a[href*='cancer.gov']").attr("target", "_blank");
//jQuery('#id').children(":first").attr("target", "_blank");
});			
		  		

        
</script>

<script type="text/javascript"> 
		  	
	jQuery(document).ready(function(){
		
		
		
		var $ = jQuery.noConflict();
		
		var $label1 = $("<label>").attr({for: 'edit-submitted-i-plan-to-quit-on-month-day-year-month',
										 class: 'element-invisible',
										 text: 'Month'}).text('Month');

		$( "#edit-submitted-i-plan-to-quit-on-month-day-year-month" ).before($label1);

		
		
		var $label2 = $("<label>").attr({for: 'edit-submitted-i-plan-to-quit-on-month-day-year-day',
										 class: 'element-invisible',
										 text: 'Day'}).text('Day');

		$( "#edit-submitted-i-plan-to-quit-on-month-day-year-day" ).before($label2);
		
		
		
		var $label3 = $("<label>").attr({for: 'edit-submitted-i-plan-to-quit-on-month-day-year-year',
										 class: 'element-invisible',
										 text: 'Year'}).text('Year');

		$( "#edit-submitted-i-plan-to-quit-on-month-day-year-year" ).before($label3);
		
		
// Results Section	
	
	
			var $rewardText1 = "After 1 week,";
			//var $rewardText1 = ('test');

		//$( ".form-60plus form-item webform-component webform-component-display webform-component--i-will-reward-myself-fieldset--1-week-by" ).after().text($rewardText1);
		
		//$(".preview .webform-component--i-will-reward-myself-fieldset--1-week-by" ).text($rewardText1 );
		
	//$('.preview .webform-component--i-will-reward-myself-fieldset--1-week-by').replaceWith($('<div>' + this.innerHTML + '</div>'));
	
	
	
	
	
	
		
	});
	
	
	
	

        
</script>
<script type="text/javascript"> 
		  	
		        	jQuery(document).ready(function(){
					   var $ = jQuery.noConflict();
					   if($("form.webform-client-form.preview").length > 0){
					    $('form.webform-client-form.preview label').detach();
					   } 
			
					   
					});
		  		

        
</script>


<script type="text/javascript">_satellite.pageBottom();</script>

  <?php //include("./sites/all/themes/sixtyplus/js/survey-dialog/jquery.confirm.js"); ?>
</body>
</html>
