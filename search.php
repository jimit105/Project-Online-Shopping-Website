<?php
session_start();
include_once("config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game of Thrones | ThinkGeek</title>
	<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
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
			background-color: #333;
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
		}
	</style>
	
</head>

<body>

<div id="logo">
	<a href="fandom.php">
		<img src="res/thinkgeek-png.png" width="100%">
	</a>
</div>


<div id="sidebar">
	<ul>
		<li>Welcome</li>
		
		<li><a href="#clothing" onclick="return false" style="filter: blur(2px);"><table><tr><td><img src="res/icons/clothing.png" /></td>
		<td>&nbsp;Clothing</td></tr></table></a></li>

		<li><a href="#acc" onclick="return false" style="filter: blur(2px);"><table><tr><td><img src="res/icons/accessories.png" /></td>
		<td>&nbsp;Accessories</td></tr></table></a></li>

		<li><a href="#sou" onclick="return false" style="filter: blur(2px);"><table><tr><td><img src="res/icons/souvenir.png" /></td>
		<td>&nbsp;Souvenir</td></tr></table></a></li>
		<li>&nbsp;</li>

		<li><table><tr><td><img src="res/icons/cart.png" /></td>
		<td>&nbsp;View Cart&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></li>

		<li>&nbsp;</li>
		<li><table><tr><td><img src="res/icons/chat.png" /></td>
		<td>&nbsp;Chat Box&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></li>
		
		<li><a href="https://goo.gl/forms/jhAHet2TLLPIOQff1" target="_blank"><table><tr><td><img src="res/icons/request.png" /></td>
		<td>&nbsp;Request Here&nbsp;</td><td><img src="res/icons/new_page.png" /></td></tr></table></a></li>
	</ul>
</div>

<div id="navbar">
	<ul>
		<li><a href="got.php">Game of Thrones</a></li>
		<li><a href="hp.php">Harry Potter</a></li>
		<li><a href="hg.php">Hunger Games</a></li>
		<li><a class="active" href="got.php">Search by Price</a></li>
	</ul>
</div>


<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>

<!--CONTENT-->

<div class="content">
	<section class="container">


<form name="search">
<label>Enter Amount</label><br>
<label>From:</label>
<input type="text" name="from">
<label>To:</label>
<input type="text" name="to">
<br>
<input type="submit" name="search" value="Go">
</form>


<!-- Products List Start -->
<h3>CLOTHING</h3>
<div class="row" id="clothing">
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_img_name, price FROM products WHERE category='clothing' AND fandom='Game of Thrones' ORDER BY id ASC");
if($results){ 
$products_item = '<ul style="list-style-type: none;">';
//fetch results set as object and output HTML

while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<img src="res/got/{$obj->product_img_name}">
	<p align="center">{$obj->product_name}</p>
	<p align="center" style="font-size: 1.2em;">{$currency}{$obj->price} </p>
	
	
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />

	<div align="center"><button type="submit" class="add_to_cart" id="myButton">Add to Cart</button></div>
	
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
</div>
<!-- Products List End -->










</section>
</div>














<!--FOOTER-->

<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; 2016 ThinkGeek | Made with<i style="color: #fd4b4b;">&nbsp; &#9829; &nbsp;</i>in India
		</p>

		<ul class="col-sm-6">
			<li class="col-sm-1">
				<a href="mailto:jimit.dholakia@somaiya.edu" target="_blank">
					<img src="res/social media/help.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="https://twitter.com/jimit105" target="_blank">
					<img src="res/social media/twitter.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="https://www.facebook.com/jimit105" target="_blank">
					<img src="res/social media/facebook.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="https://plus.google.com/+JimitDholakia105" target="_blank">
					<img src="res/social media/google-plus.png">
				</a>
			</li>
			<li class="col-sm-1">
				<a href="https://www.instagram.com/jimit105/" target="_blank">
					<img src="res/social media/instagram.png">
				</a>
			</li>
			<li class="col-sm-1">
				<img src="res/social media/youtube.png">
			</li>
		</ul>
	</div>
</footer>


</body>
</html>