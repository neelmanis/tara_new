<?php
include('header.php');

function getCategory($getid)
{
$query=mysql_query("SELECT name FROM `category` WHERE cid='$getid'");
$result=mysql_fetch_array($query);
return $result['name'];
}
?>
<?php
$action=$_REQUEST['action'];
$getid=$_REQUEST['id'];
$status=$_REQUEST['status'];
if (($action=='active') && ($getid!=''))
{
$sqly="UPDATE `subcategory` SET `modified_date`=NOW(),`status`='$status' where id='$getid'";
$active_result = mysql_query($sqly)or die(mysql_error());
if($active_result)
{ header('location:subcategory.php'); } else {  die('Error: ' . mysql_error()); }
} 
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('#example').DataTable();
});
</script>

<div class="container">
<div class="margin-top">
<div class="row">	
<div class="span12">	
<div class="alert alert-info">Sub Categories</div>
<a href="subcategory_add.php" ><i class="fa fa-plus"></i>&nbsp;<strong>Add Sub Category</strong></a>
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
<tr>
<th>ID</th>                                            
<th>Category</th>
<th>SubCategory</th>                                                               
<th>Action</th>
</tr>
</thead>
<tbody>

<?php 
$userx="SELECT `id`,`cat_id`, `name`,`status` FROM `subcategory` WHERE 1";
$result = mysql_query($userx)or die(mysql_error());
while($row=mysql_fetch_array($result)){
//print_r($row);
$getid=$row['id']; 
?>

<tr>
<td><?php echo $getid; ?></td>                          
<td><?php echo getCategory($row['cat_id']); ?></td>
<td><?php echo $row['name']; ?></td>
<?php $status=$row['status']; ?>			  

<td width="200">
 <?php if($status == 1) { ?> <a href="subcategory.php?id=<?php echo $getid; ?>&status=0&action=active" onClick="return(window.confirm('Are you sure you want to Deactivate.'));" class="btn btn-success">Active</a><?php } else { ?><a  href="subcategory.php?id=<?php echo $getid; ?>&status=1&action=active" onClick="return(window.confirm('Are you sure you want to Activate.'));" class="btn btn-warning">Inactive</a><?php } ?>

&nbsp;<a title="View" href="subcategory_edit.php?uid=<?php echo $getid;?>" class="btn btn-info">Edit</a> 
</td>						
</tr>
<?php } ?>                           
</tbody>
</table>
</div>		
</div>
</div>
</div>
<?php include('footer.php') ?>