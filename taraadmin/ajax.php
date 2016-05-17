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

<?php
if(isset($_POST['actiontypes']) && $_POST['actiontypes']=="getSubsubcategory"){
$subcategory=intval($_POST['subcategory']);
$queryx=mysql_query("SELECT * from sub_subcategory WHERE sub_cat_id ='$subcategory' and status='1' ORDER BY name ASC");
?>
<b>Sub SubCategory :</b>
<select name="subsubcategory" id="subsubcategory" class="form-control">
<option value="">--Select Subcategory--</option>
<?php 
$countx=mysql_num_rows($queryx);
if($countx>0){
while($result=mysql_fetch_array($queryx)){?>
<option value="<?php echo $result['id'];?>"><?php echo $result['name'];?></option>
<?php }?>
</select>
<?php } else {?><option value="<?php echo $result['id'];?>">Not Sub SubCategory Found</option> <?php } }?>