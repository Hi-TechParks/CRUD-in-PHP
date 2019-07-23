<?php

// DB connection
$con = new mysqli('localhost', 'root', '', 'test') or die(mysql_error($con));

//Data Store
if(isset($_POST['submit'])) {
	echo "submit button pressed";

	//header('location: index.php');
	$name = $_POST['name'];
	$roll = $_POST['roll'];

	$query = "INSERT INTO crud (name, roll) VALUES('$name', '$roll')";

	$con->query($query);
}

//Data View
	$view = "SELECT * FROM crud";
	$rows = $con->query($view);


//Data Delete
if(isset($_GET['delete'])){
	echo "data is deleted";
	$id = $_GET['delete'];

	$delete = "DELETE FROM crud WHERE id = $id";

	$con->query($delete);
}

?>