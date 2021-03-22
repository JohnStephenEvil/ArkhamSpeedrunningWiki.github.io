<!doctype html>
<html lang="en">

<?php
	echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/head.html");
	echo "<body id='body-main' onload='SetStyle(LoadStyle()); LoadFileMarkdown(\"Contribute\");'>";
	echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/title-bar.html");
	
	echo "<div class='container-fluid'>";
	echo "<div class='row'>";
	
	echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/sidebar.html");
	
	echo "<div class='col-md-6 center-block'><div id='targetDiv'></div></div><div class='col-md center-block overflow-hidden'></div>";
	echo "</div></div></body>";
?>