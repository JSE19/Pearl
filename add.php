<?php
	/*if (isset($_GET['submit'])) {
		echo $_GET['email'];
		echo $_GET['title'];
		echo $_GET['ingredient'];
		if (isset($_POST['submit'])) {
		echo htmlspecialchars( $_POST['email']);
		echo htmlspecialchars($_POST['title']);
		echo htmlspecialchars($_POST['ingredient']);*/

		include 'config/db_connect.php';

		$title = $email = $ingredient = '';
		$errors = array('email'=> '', 'title'=>'', 'ingredient' =>'');
		if (empty($_POST['email'])) {
			$errors['email'] =  "Email Field is Required <br />";
		}
		else{
			$email = $_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors['email'] = "Email must be a valid Email <br />";
		}
			//echo htmlspecialchars($_POST['email']);
		}
		

		//Validate Title
		if (empty($_POST['title'])) {
			$errors['title'] = "Title Field is Required <br />";
		}
		else{
			$title = $_POST['title'];
			if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
				$errors['title'] = "Field must be alphabets";
			}
			//echo htmlspecialchars($_POST['title']);
		}

		//Validate Ingredient

		if (empty($_POST['ingredient'])) {
			$errors['ingredient'] =  "Ingredient Field is Required <br />";
		} else{
			$ingredient = $_POST['ingredient'];
			if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)) {
				$errors['ingredient'] =  "Ingredients must be comma seperated value";
			}
			//echo htmlspecialchars($_POST['ingredient']);
		}

		if (array_filter($errors)) {
			//echo "There are errors in the Form";
		}else{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$ingredients = mysqli_real_escape_string($conn, $_POST['ingredient']);

			$sql = "INSERT INTO pearl (email, title, ingredients) VALUES ('$email', '$title', '$ingredients')";

			if (mysqli_query($conn, $sql)) {
				header('Location: index.php');
			}else{
				echo "Error". mysqli_error($conn);
			}
			
		}

	
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<section class="container">
	<h4 class="center"> Add A Pearl</h4>
	<form class="white" action="add.php" method="POST">
		<label>Your Email: </label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
		<div class="red-text"><?php echo $errors['email']; ?></div>
		<label>Pearl Title: </label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
		<div class="red-text"><?php echo $errors['title']; ?></div>
		<label>Pearl Spec (comma seperated): </label>
		<input type="text" name="ingredient" value="<?php echo htmlspecialchars($ingredient)?>">
		<div class="red-text"><?php echo $errors['ingredient']; ?></div>
		<div class="center">
			<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
		</div>
	</form>

</section>

<?php include('templates/footer.php'); ?>

</html>