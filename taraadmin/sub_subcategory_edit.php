<?php 
include('header.php');  
$getuid=$_REQUEST['uid'];
?>
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
$neelx="SELECT  cat_id,sub_cat_id,name,image,status FROM `sub_subcategory` Where `id`= $getuid";
$result = mysql_query($neelx);
while($mysqlrow=mysql_fetch_array($result))
{ //print_r($mysqlrow);
$category=$mysqlrow['cat_id'];
$subcategory=$mysqlrow['sub_cat_id'];
$subsubcategory=$mysqlrow['name'];
$image=$mysqlrow['image'];
$status=$mysqlrow['status'];
if($mysqlrow['status']=="1"){$active="selected";}
if($mysqlrow['status']=="0"){$inactive="selected";}
}
?>

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

if($file_name!=''){
move_uploaded_file($file_tmp,$path);
$neely="UPDATE `sub_subcategory` SET `modified_date`=NOW(),image='$img',`status`='$sub_status' WHERE `id`='$getuid'"; 
$mysqlresults = mysql_query($neely)or die(mysql_error());
if($mysqlresults) header('location:sub_subcategory.php');
}

$new1="UPDATE `sub_subcategory` SET `modified_date`=NOW(),`cat_id`='$category',`sub_cat_id`='$subcategory',`name`='$subsubcategory',`status`='$status' WHERE `id`= $getuid";
$mysqlresult=mysql_query($new1);
if($mysqlresult) header("Location:sub_subcategory.php");
}
?>

<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Updated Sub SubCategory <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>
<form action=""  method="post" name="newapp" id="newapp" enctype="multipart/form-data" onsubmit="return checkForm(this);">
<input type="hidden" name="savedetails" value="saveapp">
<div class="row">
<div class="col-md-3">
<b>Category :</b>
<select class="form-control" name="category">
<option value="">--Select Category--</option>
<?php
$neelxz="SELECT `cid`,`name`, `status` FROM `category` WHERE status='1' ORDER BY name ASC";
$result = mysql_query($neelxz);
while($mysqlrow=mysql_fetch_array($result))
{
	if($mysqlrow['cid']==$category)
	{
	echo "<option selected='selected' value='$mysqlrow[cid]'>$mysqlrow[name]</option>";
	}	else	{
	echo "<option value='$mysqlrow[cid]'>$mysqlrow[name]</option>";
	} }
?>
</select>
</div>
<div class="col-md-6" id="subcategoryDiv">
<b>Sub Category :</b>
<select name="subcategory" id="subcategory" class="form-control" <?php if($_REQUEST['uid']==""){?> style="display:none;" <?php }?>>
<?php
$query=mysql_query("SELECT * from subcategory where cat_id='$category' and $status='1' ORDER BY name ASC");
while($result=mysql_fetch_array($query)){
	if($result['id']==$subcategory)
	{
	echo "<option selected='selected' value='$result[id]'>$result[name]</option>";
	}	else	{
	echo "<option value='$result[id]'>$result[name]</option>";
}   } ?>
</select>
</div>
<div class="col-md-3">
<b>Sub SubCategory :</b> <input type="text" class="form-control" name="subsubcategory" value="<?php echo $subsubcategory ;?>" placeholder="Enter Sub SubCategory Name" />
</div>
<!--<div class="col-md-3">
<b>Video Url :</b> <input type="text" class="form-control" name="video" value="<?php echo $video ;?>" placeholder="Enter video url"/>
</div>-->
<div class="col-md-3">
<b>Image :</b> <input type="file" name="image" id="image"/>
<?php if (isset($image) && !empty($image)) {?>
<img src="subcat_image/<?php echo $image; ?>" align="center" height="100" width="100"><?php } ?>
</div>
<div class="col-md-3">
<b>Status :&nbsp;&nbsp;</b>&nbsp;<select class="form-control" name="sub_status">
<option value="1" <?php echo $active;?>>Active</option>
<option value="0" <?php echo $inactive;?>>Inactive</option>
</select>
</div>
</div>

<br/>
<button class="btn btn-success" name="saveinterest" value="Save Details" onclick="save_interest(); return false;">
<i class="icon-save"></i>&nbsp;Update Category</button>
</form>        
</div>
<?php include('footer.php') ?>