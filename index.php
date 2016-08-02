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
				<strong>Insert</strong>
				<form method="post" action="http://localhost/restful_api_demo/api.php?q=insertUser">
					<span>Email:<input type="text" name="email"></span>
					<span>Name:<input type="text" name="name"></span>
					<span>Password:<input type="text" name="pwd"></span>
					<input type="submit" value="submit">
				<form>
			</section>
			<br/>
		<section style="margin:15px">
			<table style="border-radious:5 gray">
			<strong>List:</strong>
			<?php
			$con = mysqli_connect('localhost','root','','restful');
			$sql = mysqli_query($con, "SELECT * FROM users");
			while($row=mysqli_fetch_array($sql)){
				echo '<tr>';
				?>
				<td><?php echo $row['user_id'];?>.</td>
				<td><?php echo $row['user_fullname'];?></td>
				<td><a href="http://localhost/restful_api_demo/api.php?q=userDetails&id=<?php echo $row['user_id'];?>">Details</a></td>
				<td><a href="http://localhost/restful_api_demo/update.php?id=<?php echo $row['user_id'];?>">Update</a></td>
				<td><a href="http://localhost/restful_api_demo/api.php?q=userDelete&id=<?php echo $row['user_id'];?>">Delete</a></td>				
			<?php
			echo '<tr>';
				}
			?>
			</table>
			</section>
			<br/>
			<code>
			<ul>
				<li>For create[POST]:http://localhost/restful_api_demo/api.php?q=insertUser</li>
				<li>For details[GET]:http://localhost/restful_api_demo/api.php?q=userDetails&id=1</li>
				<li>For update[PUT]:http://localhost/restful_api_demo/api.php?q=updateUser&id=1</li>
				<li>For delete[DELETE]:http://localhost/restful_api_demo/api.php?q=deleteUser&id=1</li>
			</ul>
			</code>
	</body>
</html>