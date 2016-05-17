<?php
include('header.php');  
//echo "---><br/>".$username.$gotuid;
?>
<?php
function getCategory($getid)
{
$query=mysql_query("SELECT name FROM `category` WHERE cid='$getid'");
$result=mysql_fetch_array($query);
return $result['name'];
}
function getSubCategory($getid)
{
$query=mysql_query("SELECT name FROM `subcategory` WHERE id='$getid'");
$result=mysql_fetch_array($query);
return $result['name'];
}
function getSubSubCategory($getid)
{
$query=mysql_query("SELECT name FROM `sub_subcategory` WHERE id='$getid'");
$result=mysql_fetch_array($query);
return $result['name'];
}
?>
<?php
$action=$_REQUEST['action'];
$getid=$_REQUEST['id'];
$status=$_REQUEST['status'];

if (($action=='del') && ($getid!=''))
{
	$sqlu="delete from products where pid='$getid'";
	$del_result = mysql_query($sqlu)or die(mysql_error());
	if($del_result)
	{ header('location:product.php'); } else {  die('Error: ' . mysql_error()); }
}

if(($action=='active') && ($getid!=''))
{
$sqly="UPDATE `products` SET `modified_date`=NOW(),`status`='$status' where pid='$getid'";
$active_result = mysql_query($sqly)or die(mysql_error());
if($active_result)
{ header('location:product.php'); } else {  die('Error: ' . mysql_error()); }
} 
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>	
<div class="container">
<div class="margin-top">
<div class="row">	
<div class="span12">	
<div class="alert alert-info">Product List </div>
<a href="product_add.php" ><i class="fa fa-plus"></i>&nbsp;<strong>Add Product</strong></a>
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
<tr>
<th>Category</th>
<th>SubCategory</th>
<th>Sub SubCategory</th>
<th>Product Code</th> 
<th>Product Name</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php 
$neelx="SELECT `pid`,`cat_id`,`sub_catid`,`sub_sub_catid`,`title`,`product_code`,`status` FROM `products` WHERE 1";
$result = mysql_query($neelx)or die(mysql_error());
while($row=mysql_fetch_array($result)){
$getid=$row['pid'];
$get_catid=$row['cat_id'];
$get_sub_catid=$row['sub_catid'];
$get_sub_Subcatid=$row['sub_sub_catid'];
$title=$row['title'];
$product_code=$row['product_code'];
?>
<tr>                 
<td><?php echo getCategory($get_catid); ?></td>  
<td><?php echo getSubCategory($get_sub_catid); ?></td>  
<td><?php echo getSubSubCategory($get_sub_Subcatid); ?></td>  
<td ><?php echo $product_code; ?></td>
<td ><?php echo $title; ?></td>
<?php $status=$row['status']; ?>
<td width="150">
 <?php if($status == 1) { ?> <a href="product.php?id=<?php echo $getid; ?>&status=0&action=active" onClick="return(window.confirm('Are you sure you want to Deactivate.'));" class="btn btn-success">Active</a><?php } else { ?><a  href="product.php?id=<?php echo $getid; ?>&status=1&action=active" onClick="return(window.confirm('Are you sure you want to Activate.'));" class="btn btn-warning">Inactive</a><?php } ?>

&nbsp;<a title="View" href="product_edit.php?uid=<?php echo $getid;?>" class="btn btn-info">Edit</a> 
&nbsp;<a href="product.php?action=del&id=<?php echo $getid; ?>" onClick="return(window.confirm('Are you sure you want to delete?'));" class="btn btn-danger">Delete</a>	
</td>									
</tr>
<?php  }  ?>                           
</tbody>
</table>
</div>		
</div>
</div>
</div>
<?php include('footer.php') ?>