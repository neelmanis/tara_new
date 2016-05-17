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


<div class="title_wrp">   Tara My Karigar    </div>
 
<div class="TMK_img shadow_style">  <img src="images/TMK_Logo.jpg">   </div>
 
<P> Jewellery Designed By You Custom Made By Us   </P>

<P> Any ready to sell jewellery collection is limited but the Craftsmanship of Tara has no boundaries. We at Tara have decided to bring our greatest asset to your doorstep – our craftsman & state of the art machinery and synergies it with your design choice.  </P>


<P> You can bring in your design choice, select from our library, or create a design of your own. Our designers will give you a 3D CAD drawing that almost looks like the real thing! Then you can decide to use your gold and diamonds/precious stones in total or in part. Thus, drastically reducing the money you have to pay for the new customised jewellery.
Custom-made jewellery is our speciality. Our expertise lies in creating unique designs from any picture, drawing or idea. If you have a design in mind, Tara Jewellers can get it made for you.  </P>
 

<div class="karagir_img shadow_style">  <img src="images/Banner.jpg">   </div>


<P> Tara My Karigar gives you an opportunity to have a unique, custom made ring or jewellery piece, designed individually for you. We enjoy the process of designing and making a unique piece of jewellery custom made to your preference. We’ll work with you to design that perfect piece, whether you’d like to recreate a piece, re-design your existing jewellery utilizing your own diamonds to create something new and exciting in the process. You may also choose from Tara’s exhaustive design bank of several thousand jewellery designs that can be customized, modified and changed to make a unique, one of a kind piece.  </P>


<P> From allowing you to select the combination of gemstones and diamonds to the preferred metal, Tara would assist and deliver beyond – from idea to creation. </P>
 

<div class="clearfix"> </div>

<b>  From Concept to Creation  </b>


<div class="price_breakup_wrap">
         	<div class="arrowlistmenu">
    
            <div class="main_accord"> 
                <div class="menuheader expandable">  Step 1  </div>
                <div class="categoryitems accord_detail">   
                     
                Create a design of your own / Select from our catalogue
                     
                </div>
            </div>
        	
            <div class="main_accord"> 
                <div class="menuheader expandable"> Step 2 </div>
                <div class="categoryitems accord_detail">   
         
        			 See a 3D image (CAD) of the design selected
                    
                <div class="clearfix"></div>
                </div>
            </div>
            
            <div class="main_accord"> 
                <div class="menuheader expandable"> Step 3 </div>
                <div class="categoryitems accord_detail">   
         
        			Get a wax model of the product for accurate feel of the finished piece
                    
                <div class="clearfix"></div>
                </div>
            </div>
            
            <div class="main_accord"> 
                <div class="menuheader expandable"> Step 4 </div>
                <div class="categoryitems accord_detail">   
         
                   See your dream come to reality
                    
                <div class="clearfix"></div>
                </div>
            </div>
 
    <div class="clear"></div>   
</div>
         
         </div>
         
<div class="clearfix"> </div>        
 
<P> During this process we consult extensively with you to develop and create exactly what you have in mind. Our expertise, commitment to quality and customer service will ensure the creation of the finest bespoke jewellery that you will be proud to wear for many years to come.  </P>
 
   
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>