<?php

	if(!empty($_POST)){
		include_once "inc/db_connect.inc";
		/**
		* It's good practice to assign values to variables, validate then use.
		*/
		$username = $_POST['username'];
		$password = addslashes($_POST['password']);
		$query = "select * from users where username = '$username' and password = md5('$password')";

		$result_set = mysql_query($query);
		$results = array();

		while($row = mysql_fetch_assoc($result_set)){
			$results[] = $row;
		}
/**
* Username: admin
* Password: password
* Injection:  "') or 1 = 1; -- "
**/
		if(count($results) == 1) header("Location: success.php");
	}

?>

<form action="" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Login" /></td>
		</tr>
	</table>
</form>
