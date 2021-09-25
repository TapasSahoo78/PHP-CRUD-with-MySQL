<?php 
require 'connect.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];

	$res = mysqli_query($conn,'insert into product(name,price,quantity,description) values("'.$name.'",'.$price.','.$quantity.',"'.$description.'")');
	if($res){
		?>
		<script>
			alert('Inserted Successfully');
		</script>
		<?php
	}else{
        ?>
        <script>
        	alert('Not Inserted');
        </script>
        <?php
	header('Location: product_list.php');
}
}
?>

<form method="post">
	
<table cellpadding="2" cellspacing="2">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>
		<tr>
		<td>price</td>
		<td><input type="text" name="price"></td>
	</tr>
		<tr>
		<td>Quantity</td>
		<td><input type="text" name="quantity"></td>
	</tr>
		<tr>
		<td>Description</td>
		<td><textarea rows="5" cols="20" name="description"></textarea></td>
	</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Save"></td>
	</tr>
</table>

</form>