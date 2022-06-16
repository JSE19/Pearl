<?php 
include 'config/db_connect.php';
if (isset($_POST['delete'])) {
	$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
	$sql = "DELETE FROM pearl WHERE id = $id_to_delete";
	if(mysqli_query($conn, $sql)){
		header("Location: index.php");
	}
	else{
		echo "Query Error: ". mysqli_error($conn);
	}
}

if (isset($_GET['id'])) {
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$sql = "SELECT * FROM pearl WHERE id = $id";
	$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
	$pearl = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
	//print_r($pearl);
}

?>


<!DOCTYPE html>
<html>
<?php include 'templates/header.php'; ?>
<div class="container center">
	<?php if ($pearl): ?>
		<h4><?php echo htmlspecialchars($pearl['title']); ?></h4>
		<p>Created By: <?php echo htmlspecialchars($pearl['email']); ?></p>
		<p><?php echo date($pearl['created_at']) ?></p>
		<h5>Ingredients: </h5>
		<p><?php echo htmlspecialchars($pearl['ingredients']) ?></p>

		<form action="details.php" method="POST">
			<input type="hidden" name="id_to_delete" value="<?php echo $pearl['id'] ?>">
			<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
		</form>

	<?php else: ?>
		<h5><?php echo 'No Such Pizza Available!!!' ?></h5>

	<?php endif; ?>
</div>

<?php include 'templates/footer.php'; ?>
</html>