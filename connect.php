<?php 

$conn = mysqli_connect('localhost','root','','demo');

if($conn){
?>

<script>
	alert('Connection Successful');
</script>

<?php 

}else{

	die("no connection".mysqli_connect_error());
}

?>