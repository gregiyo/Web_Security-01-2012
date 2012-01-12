<a href="normal.php">Normal Page</a>
<p>
Considering the attacker copied the previous page and directed the form action to:
xxx.xxx.xxx.xxx/security/spoofing/process.php
</p>
<p>
Now the attacker will have the ability to specify whatever input he wants.
</p>
<br />
<form action="process.php" method="post">
	<input type="text" name="account_type" />
	<br />
	<input type="submit" value="Submit" />
</form>
