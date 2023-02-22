<?php
	require_once 'conn.php';
	$conn->query("DELETE FROM `user` WHERE `id` = '$_REQUEST[id]'");
	header('location:../user.php');

    ?>