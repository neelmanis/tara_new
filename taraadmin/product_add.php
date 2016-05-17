<?php 
include('header.php');   
ob_start();
//echo "---><br/>".$username.$gotuid;
?>
<style>
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
    box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    width:auto;
    padding:0 10px;
    border-bottom:none;
    }
</style>
<!-- ckeditor start -->
<script src="//cdn.ckeditor.com/4.4.4/full/ckeditor.js"></script>
<!-- ckeditor over -->
<script>
$(document).ready(function(){
$("#category").live('change',function(){
	category=$("#category").val();
	$.ajax({ type: 'POST',
					url: 'ajax.php',
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
 
 $("#subcategory").live('change',function(){
	subcategory=$("#subcategory").val();
	$.ajax({ type: 'POST',
					url: 'ajax.php',
					data: "actiontypes=getSubsubcategory&subcategory="+subcategory,
					dataType:'html',
					beforeSend: function(){
							},
					success: function(data){
							    // alert(data);
							     $("#subSubcategoryDiv").html(data);  
							}
		});
 });
 });
 </script>
<!--  Select only Two Checkbox -->
<script type="text/javascript">
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.newapp.product_flag.length; i++){
if(document.newapp.product_flag[i].checked){
total =total +1;}
if(total > 2){
alert("Please Select only two") 
document.newapp.product_flag[j].checked = false ;
return false;
}
}
} 
</script>
<?php 
$savedetails=$_POST['savedetails'];
if($savedetails=='saveapp')
{
$category=trim($_POST['category']);
$subcategory=trim($_POST['subcategory']);
$subsubcategory=trim($_POST['subsubcategory']);
$title=trim(strtoupper($_POST['title']));
$product_code=trim(strtoupper($_POST['product_code']));
$product_price=trim($_POST['product_price']);
$priority=trim($_POST['priority']);
$content=trim($_POST['content']);
$status=trim($_POST['status']);

$subcat = $_POST['subcat'];
$subcat_type = implode(",",$subcat);
	
$product_flag=$_POST['product_flag'];
foreach($product_flag as $val)
{
	$end=end($product_flag);
	$flag1.=$val;
	if($end!=$val){$flag1.=",";}
}

if(isset($_FILES['image1']) && $_FILES['image1']['name']!="")
{
$file_name1 = $_FILES['image1']['name'];
$file_size1 =$_FILES['image1']['size'];
$file_tmp1 =$_FILES['image1']['tmp_name'];
$file_type1=$_FILES['image1']['type'];
$new_file_name1 = strtolower($_FILES['image1']['tmp_name']);
$imageName1 = rand(11111,99999);
$img1 = $imageName1.$file_name1;
$path1="product_image/".$img1;
move_uploaded_file($file_tmp1,$path1);
}else{
	$img1='';
}

if(isset($_FILES['image2']) && $_FILES['image2']['name']!="")
{
$file_name2 = $_FILES['image2']['name'];
$file_size2 =$_FILES['image2']['size'];
$file_tmp2 =$_FILES['image2']['tmp_name'];
$file_type2=$_FILES['image2']['type'];
$new_file_name2 = strtolower($_FILES['image2']['tmp_name']);
$imageName2 = rand(11111,99999);
$img2 = $imageName2.$file_name2;
$path2="product_image/".$img2;
move_uploaded_file($file_tmp2,$path2);
}else{
	$img2='';
}

if(isset($_FILES['image3']) && $_FILES['image3']['name']!="")
{
$file_name3 = $_FILES['image3']['name'];
$file_size3 =$_FILES['image3']['size'];
$file_tmp3 =$_FILES['image3']['tmp_name'];
$file_type3=$_FILES['image3']['type'];
$new_file_name3 = strtolower($_FILES['image3']['tmp_name']);
$imageName3 = rand(11111,99999);
$img3 = $imageName3.$file_name3;
$path3="product_image/".$img3;
move_uploaded_file($file_tmp3,$path3);
}else{
	$img3='';
}

if(isset($_FILES['image4']) && $_FILES['image4']['name']!="")
{
$file_name4 = $_FILES['image4']['name'];
$file_size4 =$_FILES['image4']['size'];
$file_tmp4  =$_FILES['image4']['tmp_name'];
$file_type4 =$_FILES['image4']['type'];
$new_file_name4 = strtolower($_FILES['image4']['tmp_name']);
$imageName4 = rand(11111,99999);
$img4 = $imageName4.$file_name4;
$path4="product_image/".$img4;
move_uploaded_file($file_tmp4,$path4);
}else{
	$img4='';
}

$sqlx="INSERT INTO `products`(`pid`, `post_date`,`cat_id`,`sub_catid`,`sub_sub_catid`,`title`,`product_code`,`product_flag`,`product_price`,`priority`, `body`, `img1`,`img2`,`img3`,`img4`,`list_products`, `status`) 
VALUES ('',NOW(),'$category','$subcategory','$subsubcategory','$title','$product_code','$flag1','$product_price','$priority','$content','$img1','$img2','$img3','$img4','$subcat_type','$status')";
$mysqlresult=mysql_query($sqlx);
if($mysqlresult) header("Location:product.php");
}
?>
<!--https://www.kirupa.com/forum/showthread.php?264685-upload-to-multiple-directories-->
<div class="container">
<h4 class="page-header">
<span class="glyphicon glyphicon-user"></span>&nbsp;Add Product <?php if(isset($signup_error)){ echo '<span style="color: red;" />'.$signup_error.'</span>';} ?></h4>
<form action=""  method="post" name="newapp" id="newapp" enctype="multipart/form-data" onsubmit="return checkForm(this);">
<input type="hidden" name="savedetails" value="saveapp">

<div class="row">
<div class="col-md-6">
<b>Category :</b>
<select class="form-control" name="category" id="category">
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
</div>
<div class="col-md-6" id="subSubcategoryDiv">
</div>

<div class="col-md-6">
<b>Product Name :</b> <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" Placeholder="Enter Product Name" required/>
</div>
<div class="col-md-6">
<b>Product Code :</b> <input type="text" class="form-control" name="product_code" value="<?php echo $product_code; ?>" Placeholder="Enter Product Code" required/>
</div>
<div class="col-md-6">
<b>Product Price :</b> <input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>" Placeholder="Enter Product Price" required/>
</div>
<div class="col-md-6">
<b>Product Flags :</b>
<input type="checkbox" name="product_flag[]" id="product_flag" value="TMK" onclick='chkcontrol(0)';>&nbsp; TMK &nbsp;
<input type="checkbox" name="product_flag[]" id="product_flag" value="Best Buy" onclick='chkcontrol(1)';>&nbsp; Best Buy &nbsp;
<input type="checkbox" name="product_flag[]" id="product_flag" value="New" onclick='chkcontrol(2)';>&nbsp; New &nbsp; 
<span style="color: red;" />** Please Choose Only Two Flags</span>
</div>
<!--<div class="col-md-6">
<b>Priority :</b> <input type="number" min="1" class="form-control" name="priority" value="<?php echo $priority; ?>" Placeholder="Enter Product Priority" />
</div>-->
</div>
<div class="row">
<div class="col-md-6">
<b>Image 1 :</b> <input type="file" name="image1" id="image1" value="<?php echo $file_name1; ?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Image 2 :</b> <input type="file" name="image2" id="image2" value="<?php echo $file_name2; ?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Image 3:</b> <input type="file" name="image3" id="image3" value="<?php echo $file_name3; ?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Image 4 :</b> <input type="file" name="image4" id="image4" value="<?php echo $file_name4; ?>">
</div>
</div>
<div class="row">
<div class="col-md-6">
<b>Description :</b> <textarea name="content" class="ckeditor" id="content"><?php echo $content;?></textarea>
</div><br/>
</div>

<div class="row">
<div class="col-md-6">
<b>List Products in Other Category :</b></div>
<?php
$sqly="SELECT `cid`,`name`, `status` FROM `category` WHERE status='1'";
$result = mysql_query($sqly);
while($mysqlrow=mysql_fetch_array($result))
{ 
$category_id=$mysqlrow['cid'];
$category_name=$mysqlrow['name'];
?>
<fieldset class="scheduler-border">
<legend class="scheduler-border"><?php echo $category_name; ?></legend>
<?php 
$sqlx="SELECT * FROM `subcategory` WHERE cat_id='$category_id'";
$resultx = mysql_query($sqlx);
while($mysqlrowx=mysql_fetch_array($resultx))
{
$subcategory_id=$mysqlrowx['id'];
$subcategory_name=$mysqlrowx['name'];
?>
<input type="checkbox" name="subcat[]" value="<?php echo $subcategory_id;?>">&nbsp; <?php echo $subcategory_name;?> &nbsp;
<?php }?>
</fieldset>
<?php } ?>
</div>

<div class="row">
<div class="col-md-6">
<b>Status :</b> <select class="form-control" name="status">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
</div>
</div>
<button class="btn btn-success" name="savestory" value="Save Details" onclick="save_product(); return false;">
<i class="icon-save"></i>&nbsp;Add Product</button>
</form>        
</div>
<!-- ckeditor script -->
<script>
CKEDITOR.replace( 'content', {
filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Files',
filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>
<?php  ob_end_flush(); ?>
<?php include('footer.php'); ?>