<?php
require('../include/setings.php');
$caso = $_POST['caso'];
switch ($caso) {
	case 1: get_items();
			break;
	
	case 2: get_items_pending();
			break;

	case 3: get_items_closed();
			break;
	}
?>