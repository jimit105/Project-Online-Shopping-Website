<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product | ThinkGeek</title>
	<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

	<link rel="stylesheet" type="text/css" href="css/content.css">
	<!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<style type="text/css">
		body{
			margin: 0;						
		}
		#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
		}
		#addForm{
			padding-top: 10px;
			padding-left: 30px;
		}
	</style>
	
</head>

<body>

<div id="logo">
	<a href="admin.php">
		<img src="res/thinkgeek-png.png" width="100%">
	</a>
</div>

<div id="navbar">
	<ul>
		<li><a href="inventory.php">Inventory</a></li>
		<li><a class="active" href="add_product.php">Add Product</a></li>
		<li><a href="remove_product.php">Remove Product</a></li>
	</ul>
</div>


<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>

<!--CONTENT-->

<div class="content" style="color: white;">
	<section class="container">o

<!-- FORM -->
<div id="addForm">
<form name="productForm" method="post" action="add.php">
<table cellpadding="2px" cellspacing="5px"> 
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td>
		<label>Product Code: </label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_code" required>
	</td>
</tr>

<tr>
	<td>
		<label>Fandom: </label>	
	</td>
	<td colspan="2">
		<input type="text" name="fandom" required>
	</td>
</tr>

<tr>
	<td>
		<label>Category: </label>	
	</td>
	<td colspan="2">
		<input type="text" name="category" required>
	</td>
</tr>

<tr>
	<td>
		<label>Product Name: </label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_name" required>
	</td>
</tr>

<tr>
	<td>
		<label>Price: </label>	
	</td>
	<td colspan="2">
		<input type="text" name="price" required>
	</td>
</tr>

<tr>
	<td>
		<label>Quantity </label>	
	</td>
	<td colspan="2">
		<input type="text" name="product_qty" required>
	</td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>


<tr>
<td>&nbsp;</td>
<td>
	<input type="submit" name="addproduct" value="Add Product" class="click">
</td>
<td>&nbsp;</td>
</tr>

</table>
</form>
</div>


</section>
</div>

</body>
</html>