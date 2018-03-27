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
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
<!--Script from NIH for analytics-->
<script src="//assets.adobedtm.com/f1bfa9f7170c81b1a9a9ecdcc6c5215ee0b03c84/satelliteLib-4b219b82c4737db0e1797b6c511cf10c802c95cb.js"></script>
<!--//Script from NIH for analytics-->

<?php print $head; ?>
<title><?php print $head_title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php print $styles; ?><?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<!-- SKIP LINK --> 

<a class="skip-main" href="#navskip">Skip to main content</a> 

<!--<div id="skip-main" tabindex="-1"></div>--> 
<!-- //SKIP LINK --> 

<?php print $page_top; ?> <?php print $page; ?> <?php print $page_bottom; ?> <a href="#" class="cd-top">
<div><span style="font-family:Arial, Helvetica, sans-serif; font-size:inherit;">TOP</span></div>
<div><i class="fa fa-arrow-circle-up fa-3x"></i></div>
</a> 
<!-- INTERNAL PAGE SCRIPTS: MAIN -->

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

<!-- Google analytics Events: Carousel --> 
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
<!-- //Google analytics Events: Carousel --> 

<!-- Google analytics Events: Text-rezize --> 
<script type="text/javascript"> 
jQuery("#decfont").on('click', function() {

	ga('send', 'event', 'TextResize', 'Clicked', 'DecTextSize');
});

jQuery("#incfont").on('click', function() {

	ga('send', 'event', 'TextResize', 'Clicked', 'incTextSize');
});
        
</script> 
<!-- //Google analytics Events: Text-rezize --> 

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

<!-- Google Code for Remarketing Tag --> 
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
---------------------------------------------------> 
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 900095112;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script> 
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/900095112/?guid=ON&amp;script=0"/> </div>
</noscript>
<!-- //Google Code for Remarketing Tag -->

</body>
</html>
