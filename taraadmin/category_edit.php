<?php 
include('header.php');  
$getuid=$_REQUEST['uid'];
?>

<?php
$neelx="SELECT  name,video,status FROM `category` Where `cid`= $getuid";
$result = mysql_query($neelx);
while($mysqlrow=mysql_fetch_array($result))
{ //print_r($mysqlrow);
$category=$mysqlrow['name'];
$video=$mysqlrow['video'];
$status=$mysqlrow['status'];
if($mysqlrow['status']=="1"){$active="selected";}
if($mysqlrow['status']=="0"){$inactive="selected";}
}
?>

<?php
$savedetails=$_POST['savedetails'];
if($savedetails=='saveapp')
{
$category=trim(strtoupper($_POST['category']));
$video=$_POST['video'];
$sub_status=trim($_POST['sub_status']);

if(empty($category))
{$signup_error="Please Enter Category";}
elseif(preg_match('/^[0-9 .\-]+$/i', $category))
{$signup_error= 'Category Name is not valid';}
else{
$neely="UPDATE `category` SET `modified_date`=NOW(),name='$category',video='$video',`status`='$sub_status' WHERE `cid` ='$getuid'"; 
$mysqlresults = mysql_query($neely)or die(mysql_error());
 //print $neely;
if($mysqlresults){
header('location:category.php');
}
}}
?>

<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Updated Category <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>
<form action=""  method="post" name="newapp" id="newapp" onsubmit="return checkForm(this);">
<input type="hidden" name="savedetails" value="saveapp">
<div class="row">
<div class="col-md-3">
<b>Category :</b> <input type="text" class="form-control" name="category" value="<?php echo $category ;?>" placeholder="Enter Category Name"/>
</div>
<!--<div class="col-md-3">
<b>Video Url :</b> <input type="text" class="form-control" name="video" value="<?php echo $video ;?>" placeholder="Enter video url"/>
</div>-->
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