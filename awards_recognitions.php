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
 
<div class="title_wrp">   Awards & Recognitions  </div>
 


<div class="awards_left">
  
<h2> International business   </h2>


<ul class="points_style">

<li>   Global supplier of the year – Twice awarded by Walmart   </li>

<li> Overall Excellence Award – second highest exporter in the category of studded precious metal Jewellery exports in EPZ, by The Gem and Jewellery Export Promotion Council in year 2007, 2008 and 2009  </li>

<li> Conferred with “Star Trading House” Status – By the Ministry of Commerce & Industry and have been the highest exporter in gems and jewellery sector for the years FY2009 and FY2010  </li>

</ul>


<ul class="award_list_style">
<li><div class="img_wrp"><img src="images/award/7.jpg">  </div>    <div class="dic_title_wrp">  The “Global Supplier of the Year” Award for 2007 form Walmart </div>   </li>
<li><div class="img_wrp"><img src="images/award/2.jpg">   </div>    <div class="dic_title_wrp"> Highest Export Performance Award For 2007-2008  </div>   </li>
<li><div class="img_wrp"><img src="images/award/4.jpg">   </div>    <div class="dic_title_wrp"> Second Highest Net Foreign Exchange Earner Award for 2007-2008   </div> </li>
<li><div class="img_wrp"><img src="images/award/5.jpg">    </div>   <div class="dic_title_wrp">  The second highest exporter of studded jewellery for the year 2007-2008 </div> </li>
<li><div class="img_wrp"><img src="images/award/1.jpg">   </div>    <div class="dic_title_wrp"> Highest Export Performance Award For 2008-2009  </div>   </li>
<li><div class="img_wrp"><img src="images/award/3.jpg">   </div>    <div class="dic_title_wrp"> Second Highest Net Foreign Exchange Earner Award for 2008-2009   </div> </li>
<li><div class="img_wrp"><img src="images/award/5.jpg">    </div>   <div class="dic_title_wrp">  The second highest exporter of studded jewellery for the year 2008-2009 </div> </li>
<li><div class="img_wrp"><img src="images/award/1.jpg">   </div>    <div class="dic_title_wrp"> Highest Export Performance Award For 2009-2010  </div>   </li>
<li><div class="img_wrp"><img src="images/award/3.jpg">   </div>    <div class="dic_title_wrp"> Highest Net Foreign Exchange Earner Award for 2009-2010  </div>   </li>
<li><div class="img_wrp"><img src="images/award/9.jpg">  </div>    <div class="dic_title_wrp">  Nominated for the Best 360 Marketing of the Year 2012  </div>   </li>
<li><div class="img_wrp"><img src="images/award/11.jpg">   </div>    <div class="dic_title_wrp"> Awarded “Print Campaign of the Year 2012”  </div>   </li>
<li><div class="img_wrp"><img src="images/award/8.jpg">  </div>    <div class="dic_title_wrp"> Awarded “LUXURY RETAILER OF YEAR” at the Star Retailer Awards 2013 </div>   </li>
<li><div class="img_wrp"><img src="images/award/10.jpg">   </div>    <div class="dic_title_wrp">  The Best Store Design of the Year – Single Brand category at the ET Retail Awards 2013 </div>   </li>
</ul>
 
</div>

 <div class="awards_right">  <div class="award_img_style shadow_style">     <img src="images/awward_img.jpg">   </div></div>
 
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>