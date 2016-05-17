<?php 
include 'dbcon.php';
$pid=mysql_real_escape_string($_GET['pid']);

$sqlx=mysql_query("SELECT * FROM `products` WHERE pid='$pid'");
$row=mysql_fetch_array($sqlx);
$product_code=$row['product_code'];
$title=$row['title'];
$body=$row['body'];
$image1=$row['img1'];
$image2=$row['img2'];
$image3=$row['img3'];
$image4=$row['img4'];
$file_path = 'taraadmin/product_image/';

$single_img1=$file_path.$image1; // For get first Single Image
$single_img2=$file_path.$image2; // For get first Single Image
$single_img3=$file_path.$image3; // For get first Single Image
$single_img4=$file_path.$image4; // For get first Single Image

/******************* Send Mail ****************************/
@$send=$_POST["send"];
error_reporting(0);
if($send=="senddetails")
{ //print_r($_POST); 

$uname=trim($_POST['uname']);
$umail=trim($_POST['umail']);
$contact=trim($_POST['contact']);
$product_name=trim($_POST['product_name']);
$product_code=trim($_POST['product_code']);
$message=trim($_POST['message']);

$sql="INSERT INTO `product_enquiry`(`id`, `post_date`,`product_name`, `product_code`, `customer_name`, `email`, `contact_no`,`message`)
 VALUES ('',NOW(),'$product_name','$product_code','$uname','$umail','$contact','$message')";
$result=mysql_query($sql);
if($result){

$to = "neelmani@kwebmaker.com";
$subject = "Product Enquiry";
$bodys = '<table width="100%" height="auto" cellspacing="0" cepadding="0" border="0" align="center" style=" font-family:Arial, Helvetica, sans-serif; font-size:14px; ">    
    <tr>
    <td width="19" ></td>
    <td colspan="2" style="padding:10px; color:#FFFFFF; font-weight:bold;"><img src="http://digitalagencymumbai.com/jobready/images/logo.png" style="width:125px;"/> </td>
    <td width="19" >&nbsp;</td>
    </tr>

    <tr>
    <td >&nbsp;</td>
    <td colspan="2">
    <table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center">  
    <tr>
<td valign="top"  style="padding:10px; line-height:20px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
<strong style="font-size:18px;">Thanks for being a part of Jobb Ready</strong>
<p><b>Name:</b> '.$uname.'</p>
<p><b>Email:</b> '.$umail.'</p>
<p><b>Contact No:</b> '.$contact.'</p>
<p><b>Product Name:</b> '.$product_name.'</p>
<p><b>Product Code:</b> '.$product_code.'</p>
<p><b>Enquiry:</b> '.$message.'</p>
    </td>
    </tr>    
    </table>
    </td>
    </tr>    
   </table>';
$headers  = 'MIME-Version: 1.0'."\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\n";
$headers .= 'From:Tara Jewellers <do-not-reply@tara.com>'."\n";
mail($to, $subject, $bodys, $headers);
}
}
?>

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

<!--  Validation  For Form  ---->
<script src="js/jquery.validate.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" media="screen" href="css/rcmc.validation.css" /> 
<script type="text/javascript">
$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();
	// validate signup form on keyup and submit
	$("#form1").validate({
			//var member_id=$("#member_type_id").val();
		rules: {
			uname: {
			required: true,
			}, 
			umail: {
				required: true,
				email:true
			},
			contact: {
				required: true,
				number:true
				},
			message: {
				required: true,
				},	
		},
		messages: {			 
			uname: {
				required: "Please enter your Name",
			},
			umail: {
				required: "Please enter a valid email id",
			}, 
			contact: {
				required: "Please enter contact number",
				number:"please enter numbers only"
			},
			message: {
				required: "Please enter Your Query",
			}
			}
	});
});
</script>


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
<script type="text/javascript">
$(document).ready(function(){
	$("#expanderHead").click(function(){
		$("#expanderContent").slideToggle();
		if ($("#expanderSign").text() == "Product Inquiry"){
			$("#expanderSign").html("Product Inquiry")
		}
		else {
			$("#expanderSign").text("Product Inquiry")
		}
	});
});
</script>
</head>

<body>

<div class="wrapper">

<!-- ------------ header starts -------------- -->

<?php include 'nav-menu.php'; ?>


<!-- ------------ container starts -------------- -->

 <div class="main_container clearfix">

<div class="product_wrap  box_shdw">
<div class="product_pic">
    	
<div class="container_detail1_a">
<a href='<?php echo $single_img1; ?>' class = 'cloud-zoom' id='zoom1'
            rel="adjustX: -4, adjustY:-4, softFocus:false">
<img src="<?php echo $single_img1; ?>" alt='' align="left" /></a>
</div>
  
<div class="clear"> </div>
 
 <div class="container_detail1_b">
 <ul class="slider responsive">
 
<li><div class="container_detail1_b1">
<a href='<?php echo $single_img1; ?>' class='cloud-zoom-gallery' title='Thumbnail 1'
rel="useZoom: 'zoom1', smallImage: '<?php echo $single_img1; ?>' "><img src="<?php echo $single_img1; ?>" alt = "Thumbnail 1"/></a>
</div></li>

<?php if($image2!='') { ?>            
<li><div class="container_detail1_b1">
<a href='<?php echo $single_img2; ?>' class='cloud-zoom-gallery' title='Thumbnail 1'
        		rel="useZoom: 'zoom1', smallImage: '<?php echo $single_img2; ?>' "><img src="<?php echo $single_img2; ?>" alt = "Thumbnail 1"/></a>
</div></li>
<?php }?>
<?php if($image3!='') { ?>
<li><div class="container_detail1_b1">
<a href='<?php echo $single_img3; ?>' class='cloud-zoom-gallery' title='Thumbnail 1'
rel="useZoom: 'zoom1', smallImage: '<?php echo $single_img3; ?>' "><img src="<?php echo $single_img3; ?>" alt = "Thumbnail 1"/></a>
</div></li>
<?php }?>
<?php if($image4!='') { ?>
<li><div class="container_detail1_b1">
<a href='<?php echo $single_img4; ?>' class='cloud-zoom-gallery' title='Thumbnail 1'
        		rel="useZoom: 'zoom1', smallImage: '<?php echo $single_img4; ?>' "><img src="<?php echo $single_img4; ?>" alt = "Thumbnail 1"/></a>
</div></li>
 <?php }?>
</ul>
</div>    		
</div>
<div class="product_details">
        
    	<h1><?php echo $title; ?></h1>
        <span class="code">PRODUCT CODE <?php echo $product_code; ?></span>
         
         <ul class="points_style">
         <?php echo $body; ?></ul>
		<div class="buy_now_wrp">  Soon You Can Buy Product </div> 
         <div class="clearfix"></div>
  
         <div class="call"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; OR CALL US AT  &nbsp;  &nbsp; <span>080-324-00000</span></div>
         
         <div class="clearfix"></div>
         <ul class="points_link_style">
         <li>  <img src="images/icon_gift.png">   <a href="#">         GIFTS    			   </a>  </li>	
         <li>  <img src="images/icon_home.png">   <a href="#">         TRY @ HOME	     	   </a>  </li>	
         <li>  <img src="images/icon_best_buy.png"> <a href="#">     BEST BUYS	    	   </a>  </li>	
         <li>  <img src="images/icon_karagir.png"> <a href="#">         TARA MY KARIGAR         </a>  </li>	
         </ul>
         
         <div class="clearfix"></div>
		 
		 <div id="detail_form_wrp">
  
 <div id="expanderHead" style="cursor:pointer;">
 <span id="expanderSign">  Product Inquiry  </span>
 </div>

 <div id="expanderContent" style="display:none">
 
         <div class="contact_form_wrp fade_anim">
    	<div class="other_head">  Product Inquiry  </div>
        
   <form method="post" action="" class="cmxform" name="from1" id="form1"> 
   <input type="hidden" name="send" value="senddetails">   
   <input type="hidden" name="product_name" value="<?php echo $title;?>">   
   <input type="hidden" name="product_code" value="<?php echo $product_code;?>">   
   <input type="hidden" name="body" value="<?php echo $body;?>">
   
        <div class="review_wrap">
        	<span> Name </span>
          <input type="text" name="uname"/>
            <div class="clearfix"></div>
        </div>
               
        <div class="review_wrap">
        	<span> E-mail </span>
            <input type="text" name="umail"/>
            <div class="clearfix"></div>
        </div>
        
        <div class="review_wrap">
        	<span> Contact </span>
            <input type="text" name="contact"/>
            <div class="clearfix"></div>
        </div>
		<div class="review_wrap">
        	<span> Query </span>
			<textarea id="message" name="message"></textarea>           
            <div class="clearfix"></div>
        </div>
        
        <div class="review_wrap">
        	<span>&nbsp;</span>
            <input type="submit" name="submit" value="submit"/>
            <div class="clearfix"></div>
        </div>
            </form>    
    </div>
 
         </div>
		 </div>
    
    <div class="clearfix"></div>
</div>
 
 
<div class="clearfix"></div>

 

</div>

<!-- ------------ container ends -------------- -->


<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>