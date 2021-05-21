<?php
	require "connection.php";
	if(!isset($_GET["name"]) == '') {
	}
	else {
        if(!isset($_GET["name"])) {
            $name1 = $_GET["name"];
        }

		if(isset($_GET["r"])) {
			$red = $_GET["r"];
		}

		if(isset($_GET["g"])) {
			$green = $_GET["g"];
		}

        if(isset($_GET["b"])) {
			$blue = $_GET["b"];
		}
		$query = $pdo->query("UPDATE `lampes` SET `name`='$name1',`red`='$red',`green`='$green',`blue`='$blue' WHERE 1");
	}
?>