<?php
include('header.php');  
//echo "---><br/>".$username.$gotuid;
?>
<?php
$action=$_REQUEST['action'];
$getid=$_REQUEST['id'];
$status=$_REQUEST['status'];
if (($action=='active') && ($getid!=''))
{
$sqly="UPDATE `home_shopnow_image` SET `modified_date`=NOW(),`status`='$status' where id='$getid'";
$active_result = mysql_query($sqly)or die(mysql_error());
if($active_result)
{ header('location:home_shop_now.php'); } else {  die('Error: ' . mysql_error()); }
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
<div class="alert alert-info">Home Page Shop Now Image </div>
<a href="home_shop_now_add.php" ><i class="fa fa-plus"></i>&nbsp;<strong>Add Home Image</strong></a>
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
<tr>
<th>ID</th>                                            
<th>Post Date</th> 
<th>Title</th>                                                      
<th>URL</th>
<th>Action</th>
</tr>
</thead>

<tbody>
<?php 
$neelx="SELECT `id`, `post_date`,`title`,`url`,`status` FROM `home_shopnow_image` WHERE 1";
$result = mysql_query($neelx)or die(mysql_error());
while($row=mysql_fetch_array($result)){
$getid=$row['id'];
?>
<tr>
<td><?php echo $getid; ?></td>                              
<td ><?php echo $row['post_date']; ?></td>
<td ><?php echo $row['title']; ?></td>
<td ><?php echo $row['url']; ?></td>
<?php $status=$row['status']; ?>
<td width="150">
 <?php if($status == 1) { ?> <a href="home_shop_now.php?id=<?php echo $getid; ?>&status=0&action=active" onClick="return(window.confirm('Are you sure you want to Deactivate.'));" class="btn btn-success">Active</a><?php } else { ?><a  href="home_shop_now.php?id=<?php echo $getid; ?>&status=1&action=active" onClick="return(window.confirm('Are you sure you want to Activate.'));" class="btn btn-warning">Inactive</a><?php } ?>

&nbsp;<a title="View" href="home_shop_now_edit.php?uid=<?php echo $getid;?>" class="btn btn-info">Edit</a> 
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