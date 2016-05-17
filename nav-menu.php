<?php 

function getImage($id)
{
	$query_sel = "SELECT image FROM  subcategory  where id='$id'";	
	$result_sel = mysql_query($query_sel);								
	if($row = mysql_fetch_array($result_sel))		 	
	{ 		
		return $row['image'];
	}
}
?>
<style>
.pro_title_style { font-size:14px; height:50px; min-height:50px; }
</style>

<div class="header clearfix">
	<div class="header_top">
    	<div class="head_in clearfix">
        
        <div class="cart"><a href="#"> Visit Our Stores  </a></div>      
        <div class="cart">  <a class="fancybox2" href="form.php"> Enquire </a></div>
  
        </div>
    </div>

	<div class="header_bottom clearfix">
    	<div class="tara_logo"><a href="index.php"><img src="images/logo.png" title="Tara Jewellers"></a></div>
        
<!-- Desktop Menu -->

<div class="navigation">
        	<ul class="menu">
            <li data-cat="maincategory_1"><a href="#">What’s new</a></li>
            <li data-cat="maincategory_2"><a href="#">Jewellery</a></li>
            <li data-cat="maincategory_3"><a href="#">Solitaires</a></li>
            <li data-cat="maincategory_4"><a href="#">Coins</a></li>
            <li data-cat="maincategory_5"><a href="#">Collections</a></li>
            <li data-cat="maincategory_6"><a href="gifts.php">Gifts</a></li>
            <li data-cat="maincategory_7"><a href="try_home.php">Try @ home</a></li>
            <li data-cat="maincategory_8"><a href="#">Best buys</a></li>
            <li data-cat="maincategory_9"><a href="tara_my_karigar.php">Tara My Karigar</a></li>
            </ul>  

			<div class="menu_box clearfix fade_anim half_nav" id="maincategory_1" style="display:none;"> <!-- Start What’s new -->            
            <div class="sub_cat clearfix">
            <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=2 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
			<li data-cat="subcategory_<?php echo $row1['id']; ?>"><a href="product_list.php?subCategID=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
			<?php } ?>                    
            </ul>
            </div>
			<?php $sqlQ="select * from subcategory where cat_id=2 and status='1'";
			$resultQ = mysql_query($sqlQ);
			while($resQ = mysql_fetch_assoc($resultQ))
			{	$getsubcatid=$resQ['id'];
			$sqlP="select * from products where sub_catid=$getsubcatid or FIND_IN_SET($getsubcatid,list_products) and status='1' limit 2";
			$resultP = mysql_query($sqlP);?>
			<div class="sub_subcat clearfix" id="subcategory_<?php echo $resQ['id'] ?>" style="display:none">
			<?php 
			while($resP =  mysql_fetch_assoc($resultP) )
			{ 
			$image1=$resP['img1'];
			$file_paths = 'taraadmin/product_image/';
			$single_img=$file_paths.$image1;
			?>						
			<div class="half_link"><a href="product_details.php?pid=<?php echo $resP['pid']; ?>"><img src="<?php echo $single_img;?>"><?php echo $resP['title'];?> </a></div>	
			<?php } ?>
			</div>
			<?php } ?>                 
			</div>            <!-- End What’s new -->            
			
           <div class="menu_box clearfix fade_anim" id="maincategory_2" style="display:none">  <!-- Jewellery -->         
            <div class="sub_cat clearfix">
            <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=1 and status='1'";
			$result = mysql_query($query);
			?>					
            <?php   while($row = mysql_fetch_assoc($result))
			{?>
		<li data-cat="subcategory_<?php echo $row['id']; ?>"><a href="product_list.php?subCategID=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
		 <?php } ?>                    
                </ul>
                </div>
                       
               <?php $sqlQ="select * from sub_subcategory where status='1' and cat_id=1 group by sub_cat_id";
					$resultQ = mysql_query($sqlQ);
					 while($resQ = mysql_fetch_assoc($resultQ))
					{	
						$sqlP="select * from sub_subcategory where status='1' and sub_cat_id=".$resQ['sub_cat_id'];
						$resultP = mysql_query($sqlP); ?>
					<div class="sub_subcat clearfix" id="subcategory_<?php echo $resQ['sub_cat_id'] ?>" style="display:none">
						<?php while($resP =  mysql_fetch_assoc($resultP) )
						{  ?>						
						<div class="link"><a href="product_list.php?subCategID=<?php echo $resP['sub_cat_id']; ?>&sub_subCatid=<?php echo $resP['id']; ?>"><img src="../tara/taraadmin/subcat_image/<?php echo $resP['image'];?>"> <div class="pro_title_style"> <?php echo $resP['name'];?>  </div>   </a></div>	
						
<div class="navvv_bg_style">
<?php if(getImage($resQ['sub_cat_id'])!=''){?><img src="taraadmin/sub_cat_image/<?php echo getImage($resQ['sub_cat_id']);?>"/><?php }else { ?><img src="images/default.jpg"><?php } ?>
</div>						
<?php } ?>
<div class="link">
<?php if($resQ['sub_cat_id']==1){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/ring_10.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==2){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/pendant_set.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==3){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/necklaces.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==4){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/tanmaniya.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==5){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/bangle.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==6){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/earings.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==7){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/pendant_set.jpg">View All <a/>
<?php } ?>
<?php if($resQ['sub_cat_id']==8){?>
<a href="product_list.php?subCategID=<?php echo $resQ['sub_cat_id']; ?>"><img src="images/viewall/nosepin.jpg">View All <a/>
<?php } ?>
</div>
</div>

		    <?php } ?>                 
            </div>
			
			<div class="menu_box clearfix fade_anim half_nav" id="maincategory_3" style="display:none;"> <!-- Start Solitaires -->            
            <div class="sub_cat clearfix">
            <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=3 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
			<li data-cat="subcategory_<?php echo $row1['id']; ?>"><a href="product_list.php?subCategID=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
			<?php } ?>                    
            </ul>
            </div>
			<?php $sqlQ="select * from subcategory where cat_id=3 and status='1'";
			$resultQ = mysql_query($sqlQ);
			while($resQ = mysql_fetch_assoc($resultQ))
			{	$getsubcatid=$resQ['id'];
			$sqlP="select * from products where sub_catid=$getsubcatid or FIND_IN_SET($getsubcatid,list_products) and status='1' limit 2";
			//$sqlP="select * from products where status='1' and sub_catid=$getsubcatid limit 2";
			$resultP = mysql_query($sqlP);?>
			<div class="sub_subcat clearfix" id="subcategory_<?php echo $resQ['id'] ?>" style="display:none">
			<?php 
			while($resP =  mysql_fetch_assoc($resultP) )
			{ 
			$image1=$resP['img1'];
			$file_paths = 'taraadmin/product_image/';
			$single_img=$file_paths.$image1;
			?>						
			<div class="half_link"><a href="product_details.php?pid=<?php echo $resP['pid']; ?>"><img src="<?php echo $single_img;?>"><?php echo $resP['title'];?> </a></div>	
			<?php } ?>
			</div>
			<?php } ?>                 
			</div>            <!-- End solitaires -->            
			
			<div class="menu_box clearfix fade_anim half_nav" id="maincategory_4" style="display:none;"> <!-- Start Coins -->            
            <div class="sub_cat clearfix">
            <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where cat_id=4 and status='1'";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
			<li data-cat="subcategory_<?php echo $row1['id']; ?>"><a href="product_list.php?subCategID=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
			<?php } ?>                    
            </ul>
            </div>
			<?php $sqlQ="select * from subcategory where cat_id=4 and status='1'";
			$resultQ = mysql_query($sqlQ);
			while($resQ = mysql_fetch_assoc($resultQ))
			{	$getsubcatid=$resQ['id'];
			$sqlP="select * from products where sub_catid=$getsubcatid or FIND_IN_SET($getsubcatid,list_products) and status='1' limit 2";
			//$sqlP="select * from products where status='1' and sub_catid=$getsubcatid limit 2";
			$resultP = mysql_query($sqlP);?>
			<div class="sub_subcat clearfix" id="subcategory_<?php echo $resQ['id'] ?>" style="display:none">
			<?php 
			while($resP =  mysql_fetch_assoc($resultP) )
			{ 
			$image1=$resP['img1'];
			$file_paths = 'taraadmin/product_image/';
			$single_img=$file_paths.$image1;
			?>						
			<div class="half_link"><a href="product_details.php?pid=<?php echo $resP['pid']; ?>"><img src="<?php echo $single_img;?>"><?php echo $resP['title'];?> </a></div>	
			<?php } ?>
			</div>
			<?php } ?>                 
			</div>            <!-- End coins --> 
			
			<div class="menu_box clearfix fade_anim half_nav" id="maincategory_5" style="display:none;"> <!-- Start collections -->            
            <div class="sub_cat clearfix">
            <ul>
			<?php  
			$query  = "SELECT * FROM subcategory where status='1' and cat_id=5";
			$result = mysql_query($query);
			while($row1 = mysql_fetch_assoc($result))
			{ ?>
			<li data-cat="subcategory_<?php echo $row1['id']; ?>"><a href="product_list.php?subCategID=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
			<?php } ?>                    
            </ul>
            </div>
			<?php $sqlQ="select * from subcategory where status='1' and cat_id=5";
			$resultQ = mysql_query($sqlQ);
			while($resQ = mysql_fetch_assoc($resultQ))
			{	$getsubcatid=$resQ['id'];
			$sqlP="select * from products where sub_catid=$getsubcatid or FIND_IN_SET($getsubcatid,list_products) and status='1' limit 2";
			//$sqlP="select * from products where status='1' and sub_catid=$getsubcatid limit 2";
			$resultP = mysql_query($sqlP);?>
			<div class="sub_subcat clearfix" id="subcategory_<?php echo $resQ['id'] ?>" style="display:none">
			<?php 
			while($resP =  mysql_fetch_assoc($resultP) )
			{
			$image1=$resP['img1'];
			$file_paths = 'taraadmin/product_image/';
			$single_img=$file_paths.$image1;
			?>						
			<div class="half_link"><a href="product_details.php?pid=<?php echo $resP['pid']; ?>"><img src="<?php echo $single_img;?>"><?php echo $resP['title'];?> </a></div>	
			<?php } ?>
			</div>
			<?php } ?>                 
			</div>            <!-- End collections --> 
			
			 
        </div><!-- #EndLibraryItem --><!-- Desktop Menu --> 
    
    </div>

</div>