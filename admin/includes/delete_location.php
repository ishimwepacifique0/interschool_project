<?php
	require_once 'conn.php';
	$conn->query("DELETE FROM `location` WHERE `location_id` = '$_REQUEST[id]'");
	header('location:../location.php');

    ?>