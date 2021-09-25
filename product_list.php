<!--DELETE DATA-->
<?php require 'connect.php'; ?>
<?php
if(isset($_GET['action'])){
	$id = $_GET['id'];
	mysqli_query($conn, 'delete from product where id='.$id);
}
?>

<a href="add.php">Add new product</a>
<br>
<table cellpadding="2" cellspacing="2" border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Option</th>
	</tr>
	<?php
	$result = mysqli_query($conn, 'select * from product');
	while($product = mysqli_fetch_object($result)){
		?>
	<tr>
		<td><?php echo $product->id; ?></td>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->price; ?></td>
		<td align="center"><a
			href="product_list.php?id=<?php echo $product->id; ?>&action=delete"
			onclick="return confirm('Are you sure?')">Delete</a> |
			<a href="update_product.php?id=<?php echo $product->id; ?>">Edit</a>
		</td>
	</tr>
	<?php } ?>
</table>