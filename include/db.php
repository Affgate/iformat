<?php

session_start();

	try {
		$db = new PDO("mysql:host=127.0.0.1;dbname=iformat", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

?>