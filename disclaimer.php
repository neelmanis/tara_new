<?php include 'dbcon.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
<title>Tara Jewellers</title>
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

<!------------------------zoomer-Start-------------------------------->
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript" src="js/cloud-zoom.1.0.2.js"></script>

 <link rel="stylesheet" type="text/css" href="css/thumb_slider.css"/>
		<script type="text/javascript" src="js/thumb_slider.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
 
<!-----------------------------------------Zoomer End---------------------------------------->



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


<div class="title_wrp">   Disclaimer   </div>
  
<p>  Tara Jewels Limited retains intellectual property rights on all the text, graphics and marks displayed on this site. All the text, graphics and marks displayed on this site are owned by Tara Jewels Limited. No reproduction of any part of the site may be used or distributed, nor shall it be modified or incorporated in any other work, publication or site, whether in hard copy or electronic format, including postings to any other site, without our prior written permission.  </p>
 
<p> Tara Jewels Limited reserves all other rights. The information on this site has been included in good faith and is for general purposes only. It should not be relied upon for any specific purpose and no representation or warranty is given as regards its accuracy or completeness.  </p>

 
<p> Neither Tara Jewels, nor its affiliates, affiliates’ officers, employees or agents shall be liable for any loss, damage or expense arising out of any access to or use of this site or any site linked to it, including, without limitation, any loss of profit, indirect, incidental or consequential loss.

 
</p>

 
 
   

   
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>