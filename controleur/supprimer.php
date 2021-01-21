<?php
case isset($_GET['action']) && ($_GET['action'] == 'delete'):
	if($_GET['validationWait'] == true) {
		echo '<form action="supprimer.php" method="post");">';
		echo '<span>Etes-vous sûr de vouloir supprimer cet utilisateur ?</span>';
		echo '<input type="hidden" name="id" value="'. $_GET['id'] .'" />';
		echo '<input type="hidden" name="action" value="delete" />';
		echo '<input type="submit" name="yes" value="Yes" />';
		echo '<input type="submit" name="no" value="No" />';
		echo '</form>';
	}

	break;
	
case isset($_POST['yes']):
	$_GET['validationWait'] = false;
	$c = new Client();
	$c->delete($_POST['id']);
	break;

	?>