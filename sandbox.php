<?php
	//tenary operator
/*$score = 100;
$val = $score <100 ?  "Low Score" : "High Score";
echo $val;

// superglobal

echo $_SERVER['SERVER_NAME'] . '<br />';
echo $_SERVER['REQUEST_METHOD'] . '<br />';
echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
echo $_SERVER['PHP_SELF'] . '<br />';

if (isset($_POST['submit'])) {
	# code...
	//set cookie
	setcookie('gender', $_POST['gender'], time() + 86400);

	// start session
	session_start();
	$_SESSION['name'] = $_POST['name'];
	header('Location: index.php');
}

//File Handling
$quotes = readfile('readme.txt');
echo $quotes;
$file = 'ReadAlways.txt';
if (file_exists($file)) {
 	# code...
 	echo readfile($file). '<br>';
 	//copy a file
 	copy($file, 'quotes.txt');
 	//absolute path
 	echo realpath($file). '<br>';
 	//filesize
 	echo filesize($file);

 	//rename a file
 	rename($file, 'ReadAlways.txt');
 } else{
 	echo "file doesnt exist" . '<br>';
 }

 mkdir('pdfs');
 $file = 'quotes.txt';
 $handle = fopen($file, 'a+');
// echo fread($handle, filesize($file));
 // read 30 bytes of the file
 //echo fread($handle, 2);
 //read one line of the file
// echo fgets($handle);
 //read one character
 //echo fgetc($handle);
 fwrite($handle, "\nMy head is under water and breathing fine, its a great thing to do...");
 fclose($handle);*/
class User{
	private $name;
	private $email;

	public function __construct($name, $email){
		//$this->email = 'egbalajoy@gmail.com';
		//$this->name = 'Egbala Joy';
		$this->name = $name;
		$this->email = $email;
	}

	public function login(){
	echo 'Welcome ' . $this->name ;
	}

	public function getName(){
		return $this->name;
	}
	public function setName($name){
		if(is_string($name) && strlen($name)){
			$this->name = $name;
			return "name has updated successfully $name";
		}
		else{
			return 'not a valid name';
		}
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		if(is_string($name) && strlen($email)){
			$this->email = $email;
			return "email has updated successfully $email";
		}else{
			return 'not valid';
		}
	}
}

//creating an instance
$userone = new User('Joy Sunday', 'egbalajoy@gmail.com');
echo $userone->getName();
echo $userone->setName('Egbala Joy Sunday');
echo $userone->setName('joysundayegbala@gmail.com');
//echo $userone->name;
//echo $userone->email;
//$userone->login();
//echo $userone->name;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>-->

</body>
</html>