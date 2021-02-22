<?php
require_once 'config.php';

function getMentors() {
	global $db;

	$sql = "SELECT *
			FROM mentors";

	$results = mysqli_query($db, $sql);

	$result = [];

	while ($row = mysqli_fetch_assoc($results)) {
		$result[] = $row;
	}

	$keys = array_keys($result);

	shuffle($keys);

	foreach($keys as $key) {
		$new[$key] = $result[$key];
	}

	$result = $new;

	return $result;
}