<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
<title>Shopping Cart | ThinkGeek</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style type="text/css">
	#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
			margin-left: 2px;
		}
</style>

<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("Your Order Has Been Placed!");
		window.location.assign("fandom.php");

	}
</script>
</head>
<body>

<div id="logo">
	<a href="fandom.php">
		<img src="res/thinkgeek-png.png" width="100%">
	</a>
</div>

<h1 align="center" style="color:white;">Shopping Cart</h1>
<div class="cart-view-table-back">

<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Fandom</th><th>Category</th><th>Name</th><th>Price</th><th>Subtotal</th><th>Remove</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$fandom = $cart_itm["fandom"];
			$category = $cart_itm["category"];
			$product_name = $cart_itm["product_name"];			
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];		
			$product_qty = $cart_itm["product_qty"];	
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_color.'">';
		    echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td>'.$fandom.'</td>';
			echo '<td>'.$category.'</td>';
			echo '<td>'.$product_name.'</td>';			
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		
	}
    ?>
    <tr><td colspan="7">&nbsp;</td></tr>
    <tr><td colspan="6"><span style="float:right;text-align: right;">Amount Payable: &#8377; <?php echo sprintf("%01.2f", $total);?></span></td></tr>

    <tr>
    	<td colspan="4"><a href="fandom.php" class="button">Add More Items</a></td>
    	<td><button type="submit">Update</button></td>

    	
    	<td><input type="button" onclick="checkoutFunction();" value="Checkout" id="checkoutButton"/></td>
    

    </tr>


  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>

</body>
</html>
