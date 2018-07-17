<?php
	include_once("config.php");
	
	if(isset($_GET["id"])){
		$package_id=$_GET["id"];
	}
	if($package_id==""){
		header("location:show-package.php");
	}
	if(isset($_POST["submit"])){
		$package_name=$_POST["pkg_name"];
		$package_desc=$_POST["description"];
		$package_price=$_POST["pkg_price"];
		$offer_price=$_POST["offer"];
		$itinerary=$_POST["itinerary"];
		$duration=$_POST["duration"];
		$inclusion=$_POST["inclusion"];
		$exclusion=$_POST["exclusion"];
		$location=$_POST["location"];
		$category=$_POST["category"];
		$city=$_POST["city"];
		$country=$_POST["country"];
		$arr_date=$_POST["arrival_date"];
		$dept_date=$_POST["departure_date"];
		$package_date=$_POST["package_date"];
		
		$sql_edit="UPDATE package SET package_name='".$package_name."', package_description= '".$package_desc."', package_price='".$package_price."', offer_price='".$offer_price."', about_itinerary='".$itinerary."', inclusion='".$inclusion."', exclusion='".$exclusion."', duration='".$duration."', location='".$location."', arrival_date='".$arr_date."', departure_date='".$dept_date."', package_date='".$package_date."' WHERE package_id=".$package_id;
		
		$res_edit =$mysqli->query($sql_edit);
		if(!$res_edit)
		{
			echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
		}
		echo "<script>window.alert('Package updated Successfully...!')</script>";
	}
	$sql_sel="SELECT  * FROM  package WHERE package_id=".$package_id ;
	$res_sel =$mysqli->query($sql_sel);
	if(!$res_sel)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	$row_sel = $res_sel->fetch_assoc();
	
	
	$category_name="";	
	$sql_n="SELECT * FROM category";
	$res_n=$mysqli->query($sql_n); 
	if(!$res_n)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$city_name="";	
	$sql_m="SELECT * FROM city";
	$res_m=$mysqli->query($sql_m); 
	if(!$res_m)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$country_name="";	
	$sql_j="SELECT * FROM country";
	$res_j=$mysqli->query($sql_j);
	if(!$res_j)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
?>