<!DOCTYPE html>
<html>
<head>
	<title>Test PHP</title>
</head>
<body>

	<?php include('action.php') ?>

	<?php
	if(isset($data)){
		echo $data;
	}
	?>



	<table border="2">
		<thead>
			<tr>
				<td>Name</td>
				<td>Roll</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($rows as $row){
		?>

			<tr>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['roll'] ?></td>
				<td>
					<a href="action.php?delete=<?php echo $row['id']?>">Delete</a>
				</td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>

	<br/>

	<form action="action.php" method="post" accept-charset="utf-8">
		<input type="text" name="name"/>
		<input type="roll" name="roll"/>

		<input type="submit" name="submit" value="Submit"/>
	</form>

</body>
</html>