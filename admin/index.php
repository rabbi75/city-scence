<?php
	include '../config.php';

	session_start();

	if (isset($_GET['page'])&& ($_SESSION['phpcoder']!='')) {
		include 'header.php';
		include $_GET['page'].'.php';
		include 'footer.php';
	}else{
		include "login.php";
	}

?> 