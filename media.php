<?php include 'dbcon.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
<title> Tara Jewellers </title>
<link rel="shortcut icon" href="images/fav.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/styles.css" />
<link type="text/css" rel="stylesheet" href="css/mangesh.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />

<link type="text/css" rel="stylesheet" href="css/media_query.css" />

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


<link type="text/css" rel="stylesheet" href="css/mobile_nav.css" />
 

<!--accordian starts-->
<link rel="stylesheet" type="text/css" href="css/accordian.css" />
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript">
    ddaccordion.init({
        headerclass: "expandable", //Shared CSS class name of headers group that are expandable
        contentclass: "categoryitems", //Shared CSS class name of contents group
        revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
        mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
        collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
        defaultexpanded: [10], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
        onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
        animatedefault: true, //Should contents open by default be animated into view?
        persiststate: true, //persist state of opened contents within browser session?
        toggleclass: ["", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
        togglehtml: ["prefix", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
        animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
        oninit: function (headers, expandedindices) { //custom code to run when headers have initalized
            //do nothing
        },
        onopenclose: function (header, index, state, isuseractivated) { //custom code to run whenever a header is opened or closed
            //do nothing
        }
    });
</script>
<!--accordian ends-->





	<link rel="stylesheet" href="css/panel_style.css"> <!-- Resource style -->
    <script src="js/mobile_nav.js"></script> <!-- Resource jQuery -->
    
    
    
    
        
    <!---------popup start---------->
  
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			jQuery('.fancybox').fancybox();

			jQuery('.fancybox2').fancybox({
                width: '545px',
                height: '500px',
                type : 'iframe'
                });
			
 
			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			jQuery(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

		});
	</script>
   
   
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
  <!---------popup end---------->  
    

</head>

<body>

<div class="wrapper">

<!-- ------------ header starts -------------- -->

<?php include 'nav-menu.php'; ?>

<!-- ------------ header ends -------------- -->



<!-- ------------ container starts -------------- -->


<div class="main_container clearfix">

<div class="inner_container  box_shdw">
 
<div class="title_wrp">  Media   </div>
 

<ul class="media_style">
 
    <li>
    <a href="images/media/Dainik_Bhaskar_April_12_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="" src="images/media/Dainik_Bhaskar_April_12_2014.jpg">  </a>
    </li>
    
    
    <li>
    <a href="images/media/Dainik_Bhaskar_Jan_31_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Dainik_Bhaskar_Jan_31_2014.jpg">  </a>
    </li>    
    
    
        <li>
    <a href="images/media/DNA_AfterHrs_Feb2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/DNA_AfterHrs_Feb20141.jpg"></a>
    </li>
    
    
    <li>
    <a href="images/media/DNA_AfterHrs_June2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/DNA_AfterHrs_June2014.jpg"></a>
    </li> 
    
    
    <li>
    <a href="images/media/DNA_AfterHrs_May_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/DNA_AfterHrs_May_20141.jpg"></a>
    </li> 
    
    
        <li>
    <a href="images/media/DNA_AfterHrs_May2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/DNA_AfterHrs_May2014_11.jpg"></a>
    </li>
    
    
    <li>
    <a href="images/media/Elle_Dec_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Dec_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_Feb_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Feb_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_Jan_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Jan_2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_July_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_July_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_July2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_July2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_Nov_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Nov_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_Nov2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Nov2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Elle_Oct_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Elle_Oct_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_April_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_April_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2015_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2015_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2015_3.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2015_3.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2015_4.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2015_4.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2015_5.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2015_5.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb_2015_6.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb_2015_6.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb2014_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb2014_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Feb2015_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Feb2015_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Oct_2015_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Oct_2015_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Brides_Oct_2015_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Brides_Oct_2015_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Feb_2016.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Feb_2016.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Hindi_Feb2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Hindi_Feb2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Hindi_July2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Hindi_July2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Hindi_June2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Hindi_June2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Hindi_March_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Hindi_March_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Hindi_Nov_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Hindi_Nov_2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/femina_july_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/femina_july_2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_March_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_March_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_March_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_March_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_March_2014_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_March_2014_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_March_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_March_2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_May_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_May_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_May_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_May_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_OCT2_2014_PG 070.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_OCT2_2014_PG 070.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_OCT2_2014PG001.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_OCT2_2014PG001.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Femina_Sept_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Femina_Sept_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/FeminaBrides_Feb2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/FeminaBrides_Feb2014.jpg"></a>
    </li>
    <li>
    <a href="images/media/Global_Gujarati_Feb_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Global_Gujarati_Feb_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Global_Gujrati_Aug_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Global_Gujrati_Aug_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Global_Gujrati_July2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Global_Gujrati_July2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Goa_Times_Nov7_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Goa_Times_Nov7_20151.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Grihasobha_Hindi_Feb_2016.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Grihasobha_Hindi_Feb_20161.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Grihasobha_Hindi_Oct_2015.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Grihasobha_Hindi_Oct_2015.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride,_July_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride,_July_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_April 2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_April 2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_April_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_April_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_Dec 2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_Dec 2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_Dec 2014_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_Dec 2014_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_Dec 2014_3.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_Dec 2014_3.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_Dec_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_Dec_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_July 2014_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_July 2014_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_July_2014_3.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_July_2014_3.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazaar Bride_Nov_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazaar Bride_Nov_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Harpers_Bazar Bride_May_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Harpers_Bazar Bride_May_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/HiBlitz_Feb_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/HiBlitz_Feb_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/HiBlitz_Sept_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/HiBlitz_Sept_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Hindustan Times_July30_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Hindustan Times_July30_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Hindustan_Time_April14_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Hindustan_Time_April14_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/HTCity_Feb9_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/HTCity_Feb9_20141.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Indian_Express_April 11_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Indian_Express_April 11_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Marwar_Mar_2016.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Marwar_Mar_2016.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/The_Daily_Post_April_11_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/The_Daily_Post_April_11_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/The_Tribue_Jan_31_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/The_Tribue_Jan_31_20141.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/TheTribune_April2_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/TheTribune_April2_20141.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/TimesofIndia_April11_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/TimesofIndia_April11_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/TimesofIndia_aug_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/TimesofIndia_aug_20141.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/TimesofIndiaApril13_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/TimesofIndiaApril13_20141.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Verve_Feb_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Verve_Feb_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Verve_Feb_2014_2.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Verve_Feb_2014_2.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Vogue_July_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Vogue_July_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Vogue_March_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Vogue_March_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Vogue_May_2014_1.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Vogue_May_2014_1.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Wedding_Affair_Feb_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Wedding_Affair_Feb_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Wedding_Times_March_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Wedding_Times_March_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Wedding_Times_Sept_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Wedding_Times_Sept_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/Wedding_Vows_June_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/Wedding_Vows_June_2014.jpg"></a>
    </li>
    
    <li>
    <a href="images/media/WeddingAffair_April_2014.jpg" class="fancybox thumbnail" data-fancybox-group="gallery" title="">
    <img class="borderImage slickHoverZoom img-responsive" src="images/media/WeddingAffair_April_2014.jpg"></a>
    </li> 
    
    
    
    
 

</ul>


    
<div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>