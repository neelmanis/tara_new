<?php 
include('header.php');   
ob_start();
//echo "---><br/>".$username.$gotuid;
?>
<?php
$savedetails=$_POST['savedetails'];
if($savedetails=='saveapp')
{
$title=trim($_POST['title']);
$status=trim($_POST['status']);
$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$new_file_name = strtolower($_FILES['image']['tmp_name']);
$imageName = rand(11111,99999);
$img = $imageName.$file_name;
$path="banner/".$img;
if(empty($title)) 
{ $signup_error="Please Enter Title";}
elseif(empty($file_name)) 
{ $signup_error="Please Choose Banner";}
elseif($file_size>2097152)
{ $signup_error="Your uploaded file size is more than 1MB so please reduce the file size and then upload.<BR>"; }

elseif(move_uploaded_file($file_tmp,$path)){
$neelx="INSERT INTO `banner`(`id`, `post_date`,`title`, `image`, `status`) VALUES ('',NOW(),'$title','$img','$status')";
$mysqlresult=mysql_query($neelx);
if($mysqlresult) header("Location:banner.php");
}
}
?>
<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Add Banner <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>
<form action=""  method="post" name="newapp" id="newapp" enctype="multipart/form-data" onsubmit="return checkForm(this);">
<input type="hidden" name="savedetails" value="saveapp">
<div class="row">
<div class="col-md-6">
<b>Title :</b> <input type="text" class="form-control" name="title" value="<?php echo $title; ?>"/>
</div>
<div class="col-md-6">
<b>Image :</b> <input type="file" name="image" id="image" value="<?php echo $file_name; ?>">
</div>
</div>

<div class="row">
<div class="col-md-6">
<b>Status :</b> <select class="form-control" name="status">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
</div>
</div>
<button class="btn btn-success" name="savestory" value="Save Details" onclick="save_story(); return false;">
<i class="icon-save"></i>&nbsp;Add Banner</button>
</form>        
</div>
<?php  ob_end_flush(); ?>
<?php include('footer.php'); ?>