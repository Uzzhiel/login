<?php

session_start();

error_reporting(0);

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | WebMapCSU</title>
</head>
<body>
	<p style="text-align:center; padding-top: 20%">PASTE UZZHIEL PART HERE</p>
	<p style="text-align:center; padding-top: 20%"><a href="logout.php">Sign Out</a></p>
</body>
</html>
