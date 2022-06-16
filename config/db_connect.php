<?php 
$conn = mysqli_connect('localhost', 'joy', 'joy123', 'pearls');
if (!$conn) {
	echo "Not Connected Successfully". mysqli_connect_error();
}
?>