<?php 
include('header.php');   
ob_start();
//echo "---><br/>".$username.$gotuid;
$getuid=$_REQUEST['uid'];
?>
<?php
$neelxz="SELECT `id`, `post_date`,`title`,`image`,`url`, `status` FROM `home_shopnow_image` WHERE `id`= $getuid";
$result = mysql_query($neelxz);
while($mysqlrow=mysql_fetch_array($result))
{
$title=$mysqlrow['title'];
$url=$mysqlrow['url'];
$image=$mysqlrow['image'];
$status=$mysqlrow['status'];
if($mysqlrow['status']=="1"){$active="selected";}
if($mysqlrow['status']=="0"){$inactive="selected";}
}
?>

<?php
$savedetails=$_POST['savedetails'];
if($savedetails=='saveapp')
{ //print_r($_POST);
$title=trim($_POST['title']);
$url=trim($_POST['url']);
$status=trim($_POST['status']);
$file_name = $_FILES['uploadedimage']['name']; 
$file_size =$_FILES['uploadedimage']['size'];
$file_tmp =$_FILES['uploadedimage']['tmp_name'];
$file_type=$_FILES['uploadedimage']['type'];
$new_file_name = strtolower($_FILES['uploadedimage']['tmp_name']);
$imageName = rand(11111,99999);
$img = $imageName.$file_name;
$path="home_block_img/".$img; 

if($file_name!=''){
move_uploaded_file($file_tmp,$path);
$neelx="UPDATE `home_shopnow_image` SET `modified_date`=NOW(),`image`='$img',`status`='$status' WHERE `id`= $getuid";  
$mysqlresult=mysql_query($neelx);
if($mysqlresult) header("Location:home_shop_now.php");
}

$new1="UPDATE `home_shopnow_image` SET `modified_date`=NOW(),`title`='$title',`url`='$url',`status`='$status' WHERE `id`= $getuid";
$mysqlresult=mysql_query($new1);
if($mysqlresult) header("Location:home_shop_now.php");
}
?>

<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Update Banner <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>

<form action=""  method="POST" name="newapp" id="newapp" enctype="multipart/form-data"/>
<input type="hidden" name="savedetails" value="saveapp">
<div class="row">
<div class="col-md-6">
<b>Title :</b> <input type="text" class="form-control" name="title" value="<?php echo $title; ?>"/>
</div>
<div class="col-md-6">
<b>Url :</b> <input type="text" class="form-control" name="url" value="<?php echo $url; ?>"/>
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Image :</b> <input type="file" name="uploadedimage" id="uploadedimage"/>
</div>
<div class="col-md-6">
<?php if (isset($image) && !empty($image)) {?>
<img src="home_block_img/<?php echo $image; ?>" align="center" height="200" width="500"><?php } ?>
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Status :</b> <select class="form-control" name="status">
<option value="1" <?php echo $active;?>>Active</option>
<option value="0" <?php echo $inactive;?>>Inactive</option>
</select>
</div>
</div>
<button class="btn btn-success" name="savestory" value="Save Details" onclick="save_story(); return false;">
<i class="icon-save"></i>&nbsp;Update Banner</button>
</form>        
</div>

<?php  ob_end_flush(); ?>
<?php include('footer.php'); ?>