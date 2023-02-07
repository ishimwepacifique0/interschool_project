<?php
	require_once 'conn.php';
	$conn->query("DELETE FROM `info_data` WHERE `id` = '$_REQUEST[id]'");
	header('location:../description.php');

    ?>