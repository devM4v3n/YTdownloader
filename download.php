<?php
	session_start();
?>
<?php
	$title = $_SESSION["fname"];
	header("Content-type: octet/stream");
	header("Content-disposition: attachment; filename=".$title.";");
	header("Content-Length:".filesize($title));
	readfile($title);
	session_unset();
	session_destroy();
	unlink($title) or die("Unable to delete");
?>