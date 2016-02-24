<?php

include("global.php");
include("header.php");
$result = mysqli_query($connection,"select * from cart
join products on (products.id = cart.product_id)
where session_id = '" . session_id() . "'") or die(mysqli_error($connection));
?>


<?php

		while ($row = mysqli_fetch_assoc($result)){
			echo $row["product_name"]
?>

			<form method="POST" action="cart_process.php">
			<input type="text" name="product_<?php echo $row['product_id']?>" value="<?php echo $row['quantity'] ?>" size="3">
<?php
		}
?>

<input type="submit" name="update_cart" value="Update Cart">
<input type="submit" name="checkout" value="Checkout">
		 

	</form>

<?php
include("footer.php");
?>