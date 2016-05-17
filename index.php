<?php include('dbcon.php');?>
<?php include("function.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
<title>Tara Jewellers</title>
<link rel="shortcut icon" href="images/fav.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="css/styles.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />

<link type="text/css" rel="stylesheet" href="css/media_query.css" />
 
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


 
	<link rel="stylesheet" href="css/panel_style.css"> <!-- Resource style -->
    <script src="js/mobile_nav.js"></script> <!-- Resource jQuery -->
	<link type="text/css" rel="stylesheet" href="css/mobile_nav.css" />
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

<?php include'nav-menu.php'; ?>

<div id="home_banner">  

<div class="index_banner box_shdw clearfix cycle-slideshow" data-cycle-speed="2000" data-cycle-timeout="5000">
<?php
$result=mysql_query("SELECT image FROM `banner` WHERE status='1'");
while($row=mysql_fetch_array($result))
{?>
<img src="../tara/taraadmin/banner/<?php echo $row['image'];?>"/>	
<?php } ?>
<div class="cycle-pager"></div>
</div>

</div>

<div class="main_container clearfix">
					<?php
					$image=array();					
					$qcat=mysql_query("SELECT image,url FROM home_shopnow_image where status='1'");
					while($rowcat=mysql_fetch_array($qcat)){
					$image[]=$rowcat['image'];
					$url[]=	$rowcat['url'];
					}
					?>	
<div class="cat_banner1 clearfix fade_anim">
    <div class="left_side box_shdw btn_hold"><a href="<?php echo $url[0];?>"><img src="taraadmin/home_block_img/<?php echo $image[0];?>"> <span>Shop Now</span> </a></div>
    <div class="right_side box_shdw btn_hold"><a href="<?php echo $url[1];?>"><img src="taraadmin/home_block_img/<?php echo $image[1];?>"> <span>Shop Now</span> </a></div>
</div>

<div class="cat_banner2 clearfix fade_anim">
    <div class="left_side box_shdw btn_hold"><a href="<?php echo $url[2];?>"><img src="taraadmin/home_block_img/<?php echo $image[2];?>"> <span>Shop Now</span> </a></div>
    <div class="right_side box_shdw btn_hold"><a href="<?php echo $url[3];?>"><img src="taraadmin/home_block_img/<?php echo $image[3];?>"> <span>Shop Now</span> </a></div>
</div>

<div class="cat_banner3 clearfix fade_anim">
    <div class="left_side box_shdw btn_hold"><a href="<?php echo $url[4];?>"><img src="taraadmin/home_block_img/<?php echo $image[4];?>"> <span>Shop Now</span> </a></div>
    <div class="right_side box_shdw btn_hold"><a href="<?php echo $url[5];?>"><img src="taraadmin/home_block_img/<?php echo $image[5];?>"> <span>Shop Now</span> </a></div>
</div>


</div><!-- #BeginLibraryItem "/Library/footer.lbi" -->

<?php include 'footer.php';?>