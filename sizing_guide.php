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


<div class="title_wrp">    Sizing Guide </div>
 
<h1> Ring Size Guide  </h1>

<p> Your ring should fit snuggly on your finger without risk of falling off. You do not want to be hurting yourself or putting too much pressure on the ring or your finger getting it on and off. It should just be able to fit over the largest part of your finger which is often the knuckle for most people.You want a ring to fit over your knuckle, but not be too loose or it will shift around. </p>

<p> The below will help you measure your ring size in two simple ways: </p>

<p> <b> Method A:</b> By measuring a ring that fits you (or your intended recipient)  <br> 
<b> Method B:</b> By measuring your finger and comparing the size to the scale  </p>


<ul class="points_style">
<li>		Get a string or paper about 6" long and 1/4" wide.    </li>
<li>		Wrap around the base of your finger. It has to fit snug, but not too tight.    </li>
<li>		Mark the point on the string/paper where it overlaps forming a circle.    </li>
<li>		Compare the length of the string/paper to the chart. That is your ring size.    </li>
</ul>
 
 
 <div class="know_diamond_img">  <img src="images/India-US-Ring-size_IN.png"> </div>
 
 

<!---->



<h1> Necklace Length Guide   </h1>

<p> Choosing the right necklace length is an easy and effective way to frame your face, showcase your gemstones, and augment any outfit. This guide will assist you with your next necklace purchase. </p>


 <div class="know_diamond_img">  <img src="images/necklace-chart.jpg"> </div>


<!---->


<h1> Bangle Size Guide </h1>
<p> <b> To find your perfect bangle size, please take note of the below diagram: </b>  </p>

 <div class="know_diamond_img">  <img src="images/Bangle-size-diagram.png"> </div>
 <div class="know_diamond_img">  <img src="images/Bangle-size.png"> </div>
 

 



    
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>