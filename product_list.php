<?php include('dbcon.php');?>
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
<script type="text/javascript" src="js/equate.js"></script>


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

<?php include 'nav-menu.php'; ?>
<?php 
include 'function.php';
//@$subCategID=$_GET['subCategID'];
//@$sub_subCatid=$_GET['sub_subCatid'];
@$subCategID = mysql_real_escape_string($_GET['subCategID']);
@$sub_subCatid = mysql_real_escape_string($_GET['sub_subCatid']);

if(isset($_GET['subCategID']) && isset($_GET['sub_subCatid']))
{
	$qcat =mysql_query("SELECT * FROM products WHERE sub_catid='$subCategID' and sub_sub_catid='$sub_subCatid' and status='1'");
	$name=getSubSubCategName($sub_subCatid);
	$video=getVideo($subCategID);
}	
else
{	
	// old query $qcat =mysql_query("SELECT * FROM products WHERE sub_catid='$subCategID' and status='1'");
	 $qcat =mysql_query("SELECT * FROM products WHERE status='1' and sub_catid='$subCategID' or FIND_IN_SET($subCategID,list_products) and status='1'");
	//	$qcat =mysql_query("SELECT * FROM products WHERE sub_catid='$subCategID' or list_products like '%$subCategID%' and status='1'");
	$name=getSubCategName($subCategID);
	$video=getVideo($subCategID);
}
$num=mysql_num_rows($qcat);

?>
<div class="main_container clearfix">

 <div class="filters_box box_shdw clearfix">  
 <div class="title"><h1><?php echo $name;?></h1><?php echo $num;?> Products</div>          
    </div>
    
    <!-- xxxxxxxxxxxxxxxxxxxxxxxx -->        

<div class="product_list_box fade_anim clearfix">
<?php
if($num == '0'){?>
<div class="coming_soon_wrp"> <img src="images/coming-soon.jpg"></div>
<?php } else { ?>
<div class="video_box box_shdw equate">
<div class="video_container">
<?php
if($video!='' )
{ echo $video;
}else{?>
<iframe src="https://www.youtube.com/embed/VrTQ9UgyoEY?autoplay=0&amp;loop=1&amp;playlist=VrTQ9UgyoEY&amp;controls=1&amp;showinfo=0;rel=0" frameborder="0" allowtransparency="true" allowfullscreen></iframe>	
<?php } ?>
</div>
</div>
<?php }?>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxx -->
<?php	
//if($num > 0){
	$i = 0;
while($row=mysql_fetch_array($qcat)){
$pid=$row['pid'];
$product_flag=$row['product_flag'];
$arr = explode(',', trim($product_flag));

$image1=$row['img1'];
$file_path = 'taraadmin/product_image/';
?>   
     
<div class="product_list box_shdw <?php if($i==0) { ?> equate<?php } ?>">    
<div class="img_box fade_anim">
<?php
$src=$file_path.$image1;
?>
<?php if (isset($image1) && !empty($image1)) {?>
<img src="<?php echo $src; ?>">
<?php } ?>		
</div>
<div class="prod_info clearfix <?php if($i==0) { ?> right_boxxx<?php } ?>">
<h2 class="prod_name"><?php echo $row['title']; ?></h2>
<a href="product_details.php?pid=<?php echo $pid;?>" class="box_btn">View Details</a>
</div>
  <?php if(isset($arr[0]) && $arr[0]!=''){?><div class="tag_patch"><?php echo $arr[0];?></div><?php } ?>
  <?php if(isset($arr[1]) && $arr[1]!=''){?><div class="tag_patch_2"><?php echo $arr[1];?></div><?php } ?>
  <?php if(isset($arr[2]) && $arr[2]!=''){?><div class="tag_patch_2"><?php echo $arr[2];?></div><?php } ?>
 </div>
<?php $i++;  } /* } else {
echo  "We have no products listed in our store yet";
} */?>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxx -->
</div>

</div><!-- #BeginLibraryItem "/Library/footer.lbi" -->

<?php include 'footer.php';?>