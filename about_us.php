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


<div class="title_wrp">    About Tara Jewels   </div>
 
<div class="about_img shadow_style">  <img src="images/Tara_Jewels_Factory.jpg">   </div>

<p> Tara Jewels Limited is a public listed company since 2012 and an integrated player in the jewellery industry with experience ranging from designing to manufacturing and retailing of jewellery with a portfolio of products that includes studded gold, platinum and silver jewellery. The company has three manufacturing facilities spread across approximately 53,000 sq. ft. and is one of the largest studded jewellery exporters from India since 2001. Tara Jewels has been a pioneer in jewellery manufacturing with known patented technologies which have revolutionized jewellery manufacturing to maximize productivity.</p>


<p>Tara Jewels growth can be attributed its range of over 50,000 designs that cater to a diverse audience across over 20 countries in five continents. We provide to retailers across Australia, Canada, China, New Zealand, Russia, South Africa, the United States, the United Kingdom as well as the rest of Europe. Our quality products and technical expertise have led Tara Jewels to partnerships and co-branded initiatives with globally renowned retail brands and internationally acclaimed celebrity designers. Through these associations Tara’s jewellery is sold not only through traditional retailers but also through leading online jewellery retailers and television networks. </p>


<p> In mid-2006, Tara Jewels Holdings, Inc. established its first United States diamond and gemstone wholesale jewellery division by partnering with M. Fabrikant & Sons Inc., a respected name in the jewellery industry for more than 100 years, to form Fabrikant-Tara International. Retailers and brand owners trust Fabrikant-Tara to supply beautifully designed product at an optimal price point, which have been well-received by consumers.  </p>


<p> After experiencing success in manufacturing and international retail Tara Jewels set up its India jewellery retail business in 2010 under the brand name Tara Jewellers to offer customers certified diamond and hallmarked gold jewellery exemplifying fine craftsmanship and exquisite designs. Tara Jewellers currently operates company owned stores across Metros, Tier I, Tier II and Tier III Indian cities. </p>
   

   
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>
