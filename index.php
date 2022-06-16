<?php
	include 'config/db_connect.php';

	$sql = 'SELECT title, ingredients, id FROM pearl ORDER BY created_at';

	$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));

	$pearls = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//print_r($pearls);

	mysqli_free_result($result);
	mysqli_close($conn);
	
?>

<!DOCTYPE html>
<html>

<?php 
	include('templates/header.php'); ?>
	
	<h4 class="center grey-text"> Pearl !!</h4>
	<div class="container">
		<div class="row">
			<?php foreach ($pearls as $pearl): ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<img src="img/pearl.png" class="pearl">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pearl['title']) ?></h6>
							<ul>
								<?php foreach(explode(',', $pearl['ingredients'])as $ing): ?>
									 <li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pearl['id'] ?>"> more info</a>
						</div>
					</div>
					
				</div>		
			<?php endforeach; ?>
			<?php if(count($pearls)>=2): ?>
				<p>There are Two or More Pearls</p>
			<?php else: ?> 
				<p>There are less than 2 Pearls</p>
			<?php endif; ?>
		</div>
	</div>

	<?php include('templates/footer.php');
?>


</html>