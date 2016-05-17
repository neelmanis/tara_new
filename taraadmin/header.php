<?php 
error_reporting(0);
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/fav.png">
<title>TARA ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="css/docs.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css" />
<!--<link rel="stylesheet" type="text/css" media="print" href="css/print.css" />	
<link rel="stylesheet" type="text/css" media="print" href="css/work.css" />-->	
	<!-- js -->			
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--<script src="js/jquery.hoverdir.js"></script>-->
			
	
<!--
	<noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
					left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
	</noscript>		
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> -->
</head>
<body>
<?php include('common_tools.php');?>  
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><?php echo strtoupper($username);?></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">Welcome</p>
            <ul class="nav">			 
			  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Category <b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li><a href="category.php">&nbsp;Category</a></li>
			   <li><a href="subcategory.php">&nbsp;Sub Category</a></li>
			   <li><a href="sub_subcategory.php">&nbsp;Sub SubCategory</a></li>
              </ul>
              </li>
			  <li><a href="product.php">&nbsp;Product</a></li>
			  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage CMS <b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="banner.php">&nbsp; Manage Banner</a></li>
			  <li><a href="home_shop_now.php">&nbsp; Manage Shop Now Image</a></li>
              </ul>
              </li>
			  <li><a href="logout.php">&nbsp;Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>	 