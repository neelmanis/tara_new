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

<!-------------- header starts -------------- -->

<?php include 'nav-menu.php'; ?>
<!-- ------------ header ends -------------- -->



<!-- ------------ container starts -------------- -->

 <div class="main_container clearfix">

<div class="inner_container  box_shdw">


<div class="title_wrp">    Know Your Diamond    </div>
 
 
<p>  To ensure that we take care of our customers and their interests long after the purchase has been made, we have listed down some useful facts about diamond and gold jewellery.  
A diamond’s worth is judged by taking four factors into consideration: Clarity, Colour, Carat and Cut, collectively known as the 4Cs of a diamond.    </p>
 
 
<h1>  Clarity  </h1>
 
<ul class="points_style">
<li>	Diamonds are mostly pure carbon. However, during crystallisation, other crystals may get trapped. These are known as ‘inclusions’.   </li>
<li>	Diamonds are assigned grades between F (Flawless) and I(included). Diamonds with high clarity grades are rare and more valuable.   </li>
</ul>

<div class="know_diamond_img">  <img src="images/ClarityImage.jpg"> </div>
 

<h1>  Colour </h1>

<ul class="points_style">
<li>  	Colour is the net combination of Hue, Tone and Saturation.      </li>
<li>  	The colour of a diamond greatly affects its value. The rule of thumb is that colourless diamonds are more valuable than coloured diamonds.    </li>
<li>  	Diamonds are rated from D to Z, D being colourless and Z being the most coloured.     </li>
</ul>

<div class="know_diamond_img">  <img src="images/ColourImage.jpg"> </div>

<!-- -->


<h1>  Cut  </h1>
<ul class="points_style"> 
<li>	The cut of a diamond is the human contribution to enhance its beauty and value.     </li>
<li>	It is what gives a diamond its brilliance, which is a combination of lustre, dispersion and scintillation.    </li>
<li>	Few popular cuts are Round, Marquise, Emerald, Princess, Pear, Oval, Heart, Baguette and Trillion.    </li>
</ul>
 
<div class="know_diamond_img">  <img src="images/CutImage.jpg"> </div>

<!---->




<h1>  Carat  </h1>

<ul class="points_style">
<li>	   ‘Carat’ is the unit of weight used for all gemstones, including diamonds.      </li>
<li>		One carat is subdivided into 100 ‘points’ and 5 carats equal 1 gram.      </li>
<li>		Larger diamonds, being more rare and desirable, are more expensive than smaller ones.      </li>
<li>		Prices of diamond increase with size.      </li>
</ul>

<div class="know_diamond_img">  <img src="images/CaratImage.jpg"> </div>

    
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>