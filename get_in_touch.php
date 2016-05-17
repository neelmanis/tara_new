<?php
include 'dbcon.php';
session_start();
@$send=$_POST["send"];
error_reporting(0);
if($send=="senddetails")
{ //print_r($_POST); 
if(empty($_SESSION['captcha_code'] ) ||  strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0)
	{
		$_SESSION['succ_msg']= "The captcha code does not match!";
	}
	else{
$uname=trim($_POST['uname']);
$contact=trim($_POST['contact']);
$umail=trim($_POST['umail']);
$sub=trim($_POST['sub']);
$enquiry=trim($_POST['enquiry']);
$ip = $_SERVER['REMOTE_ADDR'];

$sql="INSERT INTO `get_in_touch`(`id`, `post_date`,`name`, `contact`,`email`,`subject`,`enquiry`, `ip`)
 VALUES ('',NOW(),'$uname','$contact','$umail','$sub','$enquiry','$ip')";
$result=mysql_query($sql);

$to = "neelmani@kwebmaker.com";
$subject = "Customer Enquiry";
$bodys = '<table width="100%" height="auto" cellspacing="0" cepadding="0" border="0" align="center" style=" font-family:Arial, Helvetica, sans-serif; font-size:14px; ">    
    <tr>
    <td width="19" ></td>
    <td colspan="2" style="padding:10px; color:#FFFFFF; font-weight:bold;"></td>
    <td width="19" >&nbsp;</td>
    </tr>

    <tr>
    <td >&nbsp;</td>
    <td colspan="2">
    <table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center">  
    <tr>
<td valign="top"  style="padding:10px; line-height:20px; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
<strong style="font-size:18px;">Thanks for your Enquiry</strong>
<p><b>Customer Name:</b> '.$uname.'</p>
<p><b>Contact:</b> '.$contact.'</p>
<p><b>Email:</b> '.$umail.'</p>
<p><b>Subject:</b> '.$sub.'</p>
<p><b>Enquiry:</b> '.$enquiry.'</p>
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
if($result){
	$_SESSION['succ_msg1']="Thanks For Enquiry";
}
}
}
?>
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

<script src="js/jquery.validate.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" media="screen" href="css/rcmc.validation.css" />

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
  <script type="text/javascript">
jQuery().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();
	// validate signup form on keyup and submit
	$("#form1").validate({
			//var member_id=$("#member_type_id").val();
		rules: {
			uname: {
			required: true,
			}, 
			contact: {
				required: true,
				number:true
			},
			umail: {
				required: true,
				email:true
			},
			sub: {
				required: true,
			},
			enquiry: {
				required: true,
			},
			captcha_code:{
			required: true,
			},
		},
		messages: {			 
			uname: {
				required: "Please Enter your Name",
			},
			contact: {
				required: "Please Enter Contact No.",
			}, 
			umail: {
				required: "Please enter a valid email id",
			}, 
			sub: {
				required: "Please Enter Your Subject",
			},
			enquiry: {
				required: "Please Enter Your Enquiry",
			},
			captcha_code:{
				required: "Please enter captcha code",
			}
			}
	});
});
</script>
  

</head>


<body>

<div class="wrapper">

<!-- ------------ header starts -------------- -->

<?php include 'nav-menu.php'; ?>


<!-- ------------ header ends -------------- -->



<!-- ------------ container starts -------------- -->

<div class="main_container clearfix">

<div class="inner_container  box_shdw">
 
<div class="title_wrp">   Get In Touch   </div>
  
 
<div class="get_touch_left">   <p>  If you would like to get a quotation on any of our products or require any information regarding our services please fill in your details below and we will get back to you as soon as possible. Alternatively, email us directly at <a href="mailto:enquiry@tarajeweles.co.in">enquiry@tarajeweles.co.in</a>  and we will reply as soon as possible. </p>
  </div>
  
  
<div class="get_touch_right">  

<div class="contact_form_wrp fade_anim">


<div class="note">   ( Any data sent to us is confidential;  we do not sell, distribute or lease your personal information with any third party.) </div>
<?php 
if($_SESSION['succ_msg']!=""){
echo "<span class='notification n-attention' style='color: red;'>".$_SESSION['succ_msg']."</span>";
$_SESSION['succ_msg']="";
}
if($_SESSION['succ_msg1']!=""){
echo "<span class='notification n-success' style='color: green;'>".$_SESSION['succ_msg1']."</span>";
$_SESSION['succ_msg1']="";
}
?>
<form method="post" action="" class="cmxform" name="from1" id="form1"> 
<input type="hidden" name="send" value="senddetails">          
        <div class="review_wrap">
        	<span> Name </span>
             <input type="text" name="uname"/>
            <div class="clearfix"></div>
        </div>
        
         
        <div class="review_wrap">
        	<span> Phone Number </span>
            <input type="text" name="contact"/>
            <div class="clearfix"></div>
        </div>
        
        <div class="review_wrap">
        	<span> Email </span>
            <input type="text" name="umail"/>
            <div class="clearfix"></div>
        </div>
        
         
        <div class="review_wrap">
        	<span> Subject </span>
            <input type="text" name="sub"/>
            <div class="clearfix"></div>
        </div>
        
		
        <div class="review_wrap">
        	<span> Your Enquiry </span>
			<textarea id="enquiry" name="enquiry" placeholder="Enquiry"></textarea>           
            <div class="clearfix"></div>
        </div>       
        
        <div class="review_wrap">
        <span>     </span>
             
            
       <div class="security_wrp"> 
       <div class="captcha_bg">  <div class="captch_box"><img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ></div>  </div>
       <div class="captcha_input"><input type="text" class="captch_input" value="" id="captcha_code" name="captcha_code"/> </div>
       </div>       
            
       <div class="clearfix"></div>
       </div>     
       <div class="review_wrap">
        	<span>&nbsp;</span>
            <input type="submit" value="submit"/>
            <div class="clearfix"></div>
        </div>
        
     </form>   
        
    </div>
    
</div>
 
    
 <div class="clearfix"></div>
</div>
 
 <div class="clearfix"></div>

 </div>

<!-- ------------ container ends -------------- -->
 
<!-- ------------ footer starts -------------- --><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<?php include 'footer.php';?>