<?php include('header.php'); ?>

<script>
$(document).ready(function(){
$("#category").live('change',function(){
	category=$("#category").val();
	$.ajax({ type: 'POST',
					url: 'ajax_getsubcategory.php',
					data: "actiontype=getSubcategory&category="+category,
					dataType:'html',
					beforeSend: function(){
							},
					success: function(data){
							    // alert(data);
								$("#subcategoryDiv").html(data);  
							}
		});
 });
 });
 </script>
<?php
$savedetails=$_POST['savedetails'];
if($savedetails=='saveapp')
{
$category=trim($_POST['category']);
$subcategory=trim($_POST['subcategory']);
$subsubcategory=trim(strtoupper($_POST['subsubcategory']));
$sub_status=trim($_POST['sub_status']);
$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$new_file_name = strtolower($_FILES['image']['tmp_name']);
$imageName = rand(11111,99999);
$img = $imageName.$file_name;
$path="subcat_image/".$img;

if(empty($category) && $category==0)
{ $signup_error="Please Choose Category"; }
elseif(empty($subcategory) && $subcategory==0)
{ $signup_error="Please Choose Sub Category"; }
elseif(empty($subsubcategory))
{$signup_error="Please Enter Sub SubCategory";}
elseif(preg_match('/^[0-9 .\-]+$/i', $subsubcategory)) 
{$signup_error= 'Sub SubCategory Name is not valid';}
elseif(empty($file_name)) 
{ $signup_error="Please Choose Image";}
elseif($file_size>2097152)
{ $signup_error="Your uploaded file size is more than 2MB so please reduce the file size and then upload.<BR>"; }
elseif(move_uploaded_file($file_tmp,$path)){
 $sqlx="INSERT INTO `sub_subcategory`(`id`, `post_date`, `cat_id`,`sub_cat_id`, `name`,`image`, `status`) VALUES ('',NOW(),'$category','$subcategory','$subsubcategory','$img','$sub_status')";
$mysqlresults = mysql_query($sqlx)or die(mysql_error());
//print $sqlx;
if($mysqlresults){
header('location:sub_subcategory.php');
}}}
?>

<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Add Sub SubCategory <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>

<form action="" method="post" name="newapp" id="newapp" enctype="multipart/form-data" onsubmit="return checkForm(this);">
<input type="hidden" name="savedetails" value="saveapp">
<div class="row">
<div class="col-md-3">
<b>Category :</b>
<select class="form-control" name="category" id="category">
<option value="0">--Select Category--</option>
<?php
$neelxz="SELECT `cid`,`name`, `status` FROM `category` WHERE status='1' ORDER BY name ASC";
$result = mysql_query($neelxz);
while($mysqlrow=mysql_fetch_array($result))
{
	if($mysqlrow['cid']==$category)
	{
	echo "<option selected='selected' value='$mysqlrow[cid]'>$mysqlrow[name]</option>";
	}else{
	echo "<option value='$mysqlrow[cid]'>$mysqlrow[name]</option>";
	} }
?>
</select>
</div>
<div class="col-md-6" id="subcategoryDiv">
</div>
<div class="col-md-3">
<b>Sub SubCategory :</b> <input type="text" class="form-control" name="subsubcategory" value="<?php echo $subsubcategory ;?>" placeholder="Enter Sub SubCategory Name" />
</div>
<!--<div class="col-md-3">
<b>Video Url :</b> <input type="text" class="form-control" name="video" value="<?php echo $video ;?>" placeholder="Enter video url"/>
</div>-->

<div class="col-md-3">
<b>Image :</b> <input type="file" name="image" id="image" value="<?php echo $file_name; ?>">
</div>

<div class="col-md-3">
<b>Status :&nbsp;&nbsp;</b>&nbsp;<select class="form-control" name="sub_status">
<option value="1" <?php echo $active;?>>Active</option>
<option value="0" <?php echo $inactive;?>>Inactive</option>
</select>
</div>
</div>
<br/>
<button class="btn btn-success" name="savesubject" value="Save Details" onclick="save_subject(); return false;">
<i class="icon-save"></i>&nbsp;Add Category</button>
</form>        
</div>
<?php include('footer.php') ?>