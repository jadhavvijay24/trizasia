<?php



$mysqli=new mysqli("localhost", "root", "", "trizasia");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	function seo_url($vp_string)
	{
		$vp_string = trim($vp_string);
		$vp_string = html_entity_decode($vp_string);
		$vp_string = strip_tags($vp_string);
		$vp_string = strtolower($vp_string);
		$vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);
		$vp_string = preg_replace('~ ~', '-', $vp_string);
		$vp_string = preg_replace('~-+~', '-', $vp_string);
		$vp_string .= "/";
		return $vp_string;
	}
?>