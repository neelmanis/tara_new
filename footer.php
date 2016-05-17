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
			umail: {
				required: true,
				email:true
			},
		},
		messages: {				
			umail: {
				required: "Please Enter a Valid Email Id",
			}
			}
	});
});
</script>

<?php
include('dbcon.php');
//session_start();
@$send=$_POST["send"];
error_reporting(0);
if($send=="senddetails")
{ //print_r($_POST); 
$umail=trim($_POST['umail']);
$ip = $_SERVER['REMOTE_ADDR'];

$sql="INSERT INTO `subscribe_newsletter`(`id`, `post_date`, `email`, `ip`) VALUES ('',NOW(),'$umail','$ip')";
$result=mysql_query($sql);
if($result){
	$_SESSION['succ_msg1']="Thanks For Subscribe";
}
}
?>
<div class="footer clearfix fade_anim">

<div class="foot_top">

	<div class="foot_links">
    	<div class="tl">  Know TaraJewels   </div>
            <ul>
            <li><a href="about_us.php"> About us   </a></li>
            <li><a href="awards_recognitions.php"> Awards & Recognitions    </a></li>
            <li><a href="media.php"> Media   </a></li>
            <li><a href="careers.php"> Careers   </a></li>
            <li><a href="disclaimer.php"> Disclaimer   </a></li>
            <li><a href="#"> Site Map   </a></li>
            </ul>
    </div>

	<div class="foot_links">
    	<div class="tl">  Customer service </div>
            <ul>
            <li><a href="jewellery_care.php">   Jewellery Care         </a></li>
            <li><a href="know_your_diamond.php">   Know Your Diamond     </a></li>
            <li><a href="sizing_guide.php">   Size guide     </a></li>
            <li><a href="certification.php">   Certification      </a></li>
            <li><a href="get_in_touch.php">   Get In touch      </a></li>
			<li><a href="visit_our_store.php">   Store Locator      </a></li>
            </ul>
    </div>

	<div class="foot_links">
    	<div class="tl">Follows us on</div>
            <ul>
            <li><a href="https://twitter.com/tarajewellers">Twitter</a></li>
            <li><a href="https://www.facebook.com/TaraJewellers/">Facebook</a></li>
            <li><a href="https://in.pinterest.com/tarajewellers/">Pinterest</a></li>
            <li><a href="https://www.instagram.com/tarajewellers/">Instagram</a></li>
            </ul>
    </div>
    
    <div class="foot_links">
    	<div class="tl">Subscribe to Newsletter</div>
        <div>
        	<p>Sign up for our newsletter and be the first to hear about exclusive offers and deals. </p>
				<?php	if($_SESSION['succ_msg1']!=""){
				echo "<span class='notification n-success' style='color: green;'>".$_SESSION['succ_msg1']."</span>";
				$_SESSION['succ_msg1']="";
				}?>
			<form method="post" action="" class="cmxform" name="from1" id="form1"> 
			<input type="hidden" name="send" value="senddetails">     
        	<div class="newsletter_box">
			<input type="text" name="umail" placeholder="Enter your Email id">
			<input type="submit" name="submit" value="Subscribe">
			<!--<input type="button" value="Subscribe">-->
			</div>
			</form>
        </div>
    </div>

	<!--<div class="foot_links">
    	<div class="tl">Contact us</div>
        <div>
        	<p><i class="fa fa-map-marker" style="font-size:18px;"></i> Plot No 122, 15th Road, Near IDBI Bank, MIDC, Andheri East, Mumbai - 400 093</p>
            <p><i class="fa fa-envelope-o" style="font-size:13px;"></i> <a href="mailto:enquiry@tarajewels.co.in">enquiry@tarajewels.co.in</a></p>
            <p><i class="fa fa-mobile" style="font-size:22px;"></i> 022-6641-7888</p>
        </div>
    </div>-->
    
    <div class="clearfix"></div>
    
    <div class="card_div clearfix">
    <div><i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-stripe"></i></div>
    </div>

</div>

<div class="foot_bottom">Copyright &copy; 2016 Tara Jewels. All rights reserved.<br> 
<a href="http://www.kwebmaker.com" target="_blank" class="kweb">Kwebmaker &trade;</a></div>

</div><!-- #EndLibraryItem --></div>




<!--MOBILE MENU START-->

 	<main class="cd-main-content">
		  <a href="#0" class="cd-btn"> <img src="images/open_icon.png"> </a>
          <div style="clear:both;"> </div>
 	</main>
 
  	<div class="cd-panel from-right">
	  <header class="cd-panel-header">
			<a href="#" class="cd-panel-close">Close</a>
	 </header>

		<div class="cd-panel-container">
			<div class="cd-panel-content">
				 
  <div id='cssmenu'>
<ul>

   <li class='has-sub'><a href='#'><span>  WHAT'S NEW  </span></a>
    <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=2 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
    <li><a href='product_list.php?subCategID=<?php echo $row1['id']; ?>'><span> <?php echo $row1['name']; ?> </span></a></li>
			<?php } ?>
	</ul>
	</li>    
   </li>
   
   <!---->
   
   <li class='has-sub'><a href='#'><span>  JEWELLERY  </span></a>
   <ul>  
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=1 and status='1'";
			$result = mysql_query($query);
			while($row = mysql_fetch_assoc($result))
			{?>
            <li class='has-sub'><a href='product_list.php?subCategID=<?php echo $row['id']; ?>'><span> <?php echo $row['name']; ?>  </span></a>			
			<ul>
			<?php 
			$sqlP="select * from sub_subcategory where status='1' and sub_cat_id=".$row['id'];
			$resultP = mysql_query($sqlP);
			while($resP =  mysql_fetch_assoc($resultP))
			{?>
            <li><a href='product_list.php?subCategID=<?php echo $resP['sub_cat_id']; ?>&sub_subCatid=<?php echo $resP['id']; ?>'><span> <?php echo $resP['name']; ?>  </span></a></li>
			<?php } ?>
            </ul>
			</li>
			<?php } ?>
    </ul>
   </li>
   
   <!---->
   <li class='has-sub'><a href='#'><span>  SOLITAIRES  </span></a>
    <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=3 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
    <li><a href='product_list.php?subCategID=<?php echo $row1['id']; ?>'><span> <?php echo $row1['name']; ?> </span></a></li>
			<?php } ?>
	</ul>
	</li> 
	<li class='has-sub'><a href='#'><span>  COINS  </span></a>
    <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=4 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
    <li><a href='product_list.php?subCategID=<?php echo $row1['id']; ?>'><span> <?php echo $row1['name']; ?> </span></a></li>
			<?php } ?>
	</ul>
	</li>
	<li class='has-sub'><a href='#'><span>  COLLECTIONS  </span></a>
    <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=5 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
    <li><a href='product_list.php?subCategID=<?php echo $row1['id']; ?>'><span> <?php echo $row1['name']; ?> </span></a></li>
			<?php } ?>
	</ul>
	</li> 	
		
   <li><a href='gifts.php'><span>   Gifts    </span></a></li>
   <li><a href='try_home.php'><span>   Try @ home       </span></a></li>
   <li><a href='#'><span>  Best buys    </span></a></li>
   <li class='last'><a href='tara_my_karigar.php'><span>   Tara My Karigar    </span></a></li>
 
</ul>
</div>
			</div> <!-- cd-panel-content -->
		</div> <!-- cd-panel-container -->
	</div> 
    
<!--MOBILE MENU END-->
    
    

</body>
</html>
