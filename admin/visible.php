<?php 
include_once("config.php");

$id=$_GET["id"];
$visible=$_GET["v"];
$sql="UPDATE package SET showp=".$visible." WHERE package_id=".$id;
		$res=$mysqli->query($sql);

		if(!$res)
		{
			echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
		}
		 header("location: show-package.php");
?>