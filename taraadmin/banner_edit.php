<?php 
include('header.php');   
ob_start();
//echo "---><br/>".$username.$gotuid;
$getuid=$_REQUEST['uid'];
?>
<?php
$neelxz="SELECT `id`, `post_date`,`title`,`image`, `status` FROM `banner` WHERE `id`= $getuid";
$result = mysql_query($neelxz);
while($mysqlrow=mysql_fetch_array($result))
{ //print_r($mysqlrow);
$title=$mysqlrow['title'];
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
$status=trim($_POST['status']);
$file_name = $_FILES['uploadedimage']['name']; 
$file_size =$_FILES['uploadedimage']['size'];
$file_tmp =$_FILES['uploadedimage']['tmp_name'];
$file_type=$_FILES['uploadedimage']['type'];
$new_file_name = strtolower($_FILES['uploadedimage']['tmp_name']);
$imageName = rand(11111,99999);
$img = $imageName.$file_name;
$path="banner/".$img; 

if($file_name!=''){
move_uploaded_file($file_tmp,$path);
$neelx="UPDATE `banner` SET `modified_date`=NOW(),`image`='$img',`status`='$status' WHERE `id`= $getuid";  
$mysqlresult=mysql_query($neelx);
if($mysqlresult){
header("Location:banner.php");
}
}
$new1="UPDATE `banner` SET `modified_date`=NOW(),`title`='$title',`status`='$status' WHERE `id`= $getuid";
$mysqlresult=mysql_query($new1);
if($mysqlresult){
header("Location:banner.php");
}}
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
</div>
<div class="row">
<div class="col-md-6">
<b>Image :</b> <input type="file" name="uploadedimage" id="uploadedimage"/>
</div>
<div class="col-md-6">
<?php if (isset($image) && !empty($image)) {?>
<img src="banner/<?php echo $image; ?>" align="center" height="200" width="500"><?php } ?>
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