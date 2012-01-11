<?php
	
	if(!empty($_POST)){
		/**
		* Test it with the only options you have to prevent manual insertions of data
		*/
		switch($_POST['account_type']){
			case 'Manager':
			case 'HR':
			case 'Public':
				$account_type = $_POST['account_type'];
				echo "Account type: $account_type";
				break;
			default:
				echo "Invalid data found.";
		}
	}

?>
