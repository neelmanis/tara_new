<?php
include 'dbcon.php';
if(isset($_POST['actiontype']) && $_POST['actiontype']=="getSubcategory"){
$category=intval($_POST['category']);
$query=mysql_query("SELECT * from subcategory WHERE cat_id = '$category' and status='1' ORDER BY name ASC");
?>
<b>Sub Category :</b>
<select name="subcategory" id="subcategory" class="form-control" >
<option value=''>--Select Subcategory--</option>
<?php while($result=mysql_fetch_array($query)){?>
<option value="<?php echo $result['id'];?>"><?php echo $result['name'];?></option>
<?php }?>
</select>
<?php }?>