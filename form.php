<?php
include 'dbcon.php';
@$send=$_POST["send"];
error_reporting(0);
if($send=="senddetails")
{ //print_r($_POST); 

$uname=trim($_POST['uname']);
$umail=trim($_POST['umail']);
$contact=trim($_POST['contact']);
$queries=trim($_POST['queries']);
$ip = $_SERVER['REMOTE_ADDR'];

$sql="INSERT INTO `customer_enquiry`(`id`, `post_date`,`name`, `email`,`contact`, `message`, `ip`)
 VALUES ('',NOW(),'$uname','$umail','$contact','$queries','$ip')";
$result=mysql_query($sql);
if($result){
	echo "<span class='notification n-success' style='color: green;'>Thanks For Enquiry</span>";

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
<p><b>Email:</b> '.$umail.'</p>
<p><b>Contact:</b> '.$contact.'</p>
<p><b>Enquiry:</b> '.$queries.'</p>
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> Tara Jewellers </title>

 <link rel="stylesheet" type="text/css" href="css/form.css">
 
  <style>
  
  .scrollBar{
	  overflow:hidden;
	  margin:0px;
	  padding:0px;}
  
  @media (max-width:768px){
	  
	  .scrollBar{
	  overflow:inherit;}
	  
     .login-account-left {
      font-size:16px;
 }  
 }
</style>

<!--  Validation  For Form  ---->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" media="screen" href="css/rcmc.validation.css" /> 
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
			umail: {
				required: true,
				email:true
			},
			contact: {
				required: true,
				number:true
				},
			queries: {
				required: true,
				},
		},
		messages: {			 
			uname: {
				required: "Please Enter your Name",
			},
			umail: {
				required: "Please Enter a Valid Email Id",
			},
			contact: {
				required: "Please Enter Contact",
			},
			queries: {
				required: "Please Enter Your Query",
			}
			}
	});
});
</script>

<body>

<div id="inline_content" class="login_wrapper">
 
     
    <div class="signup-right">
    <div class="login-account-left">    Enquire   </div>
 <form method="post" action="" class="cmxform" name="from1" id="form1">        
 <input type="hidden" name="send" value="senddetails">     
 <div class="input_bar_wrp">  <input name="uname" type="text" class="password-put" placeholder="Your Name"></div>  
 <div class="input_bar_wrp">  <input name="umail" type="text" class="password-put" placeholder="E-mail"></div>
 <div class="input_bar_wrp">  <input name="contact" type="text" class="password-put" placeholder="Contact"></div>  
 <textarea class="text_area" placeholder="Query" id="queries" name="queries" value="Query" onFocus="this.value=(this.value=='Query')?'':this.value;" onBlur="this.value=!this.value?'Query':this.value;">Query</textarea>
 
 <div class="clear"> </div>
 <div class="input_bar_wrp"> 
 <div class="form_btn_wrp">  
 <input name="submit" type="submit" value="Send" class="form_button"> 
 </div>   </div> 
 </form>
 </div>
       
<div class="clear"></div>
</div>

</body>
</html>
