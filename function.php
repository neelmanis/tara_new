<?php
include('dbcon.php');

function getSubCategName($id)
{
	$query_sel = "SELECT name FROM  subcategory  where id='$id'";	
	$result_sel = mysql_query($query_sel);								
	if($row = mysql_fetch_array($result_sel))		 	
	{ 		
		return $row['name'];
	}
}
function getVideo($id)
{
	$query_sel = "SELECT video FROM  subcategory  where id='$id'";	
	$result_sel = mysql_query($query_sel);								
	if($row = mysql_fetch_array($result_sel))		 	
	{ 		
		return $row['video'];
	}
}
function getSubSubCategName($id)
{
	$query_sel = "SELECT name FROM  sub_subcategory  where id='$id'";	
	$result_sel = mysql_query($query_sel);								
	if($row = mysql_fetch_array($result_sel))		 	
	{ 		
		return $row['name'];
	}
}

?>