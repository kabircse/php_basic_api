<!DOCTYPE html>
<html>
	<meta lang="en">
	<head>
		<meta charset="utf-8">
		<title>Rest demo apps</title>
	</head>
	<body>
		<strong>User List JSON response test:</strong><br/>	
			<section style="margin:15px">
				<strong>Update:</strong>				
			<?php
			$id = $_GET['id'];
				$con = mysqli_connect('localhost','root','','restful');
				$sql = mysqli_query($con, "SELECT * FROM users WHERE user_id = $id");
				$row= mysqli_fetch_array($sql);
			?>
			<form method="PUT" action="http://localhost/restful_api_demo/api.php">
				<span><input type="hidden" name="q" value="updateUser"></span>
				<span><input type="hidden" name="id" value="<?php echo $row['user_id'];?>"></span>
				<span>Email:<input type="text" name="email" value="<?php echo $row['user_email'];?>"></span>
				<span>Name:<input type="text" name="name" value="<?php echo $row['user_fullname'];?>"></span>
				<span>Password:<input type="text" name="pwd"></span>
				<input type="submit" value="submit">
			<form>
		</section>
	</body>
</html>