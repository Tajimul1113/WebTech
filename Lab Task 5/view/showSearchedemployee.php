
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:20px solid white;
		}
	</style>
</head>
<body>

<?php 
    include "navigation.php";

?>
<legend style="color: red;"><b>Searched Employee</b></legend>
<table>
	<thead>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($Searchedemployee as $i => $user): ?>
			<tr>
				<td><a href="../view/showemployee.php ?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>
				<td><?php echo $user['username'] ?></td>
				<td><a href="../view/editemployee.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="../view/employeedelete.php?id=<?php echo $user['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
<?php
require '../color.php';

?>


</body>
</html>