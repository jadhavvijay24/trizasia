<?php
	include_once("config.php");

$extensions= array("jpeg","jpg","png","gif","tif");

if(isset($_POST["submit"])){		 
	if(isset($_FILES['tour_image'])){
	$errors="";
	$file_name=$_FILES['tour_image']['name'];
	$file_size=$_FILES['tour_image']['size'];
	$file_tmp=$_FILES['tour_image']['tmp_name'];
	$file_type=$_FILES['tour_image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['tour_image']['name'])));

	if(in_array($file_ext,$extensions)=== false){
	 $errors="extension not allowed, please choose a JPEG or PNG or GIF or TIF file.";
	}
	if($file_size > 5097152){
	 $errors='File size must be exactly 5 MB';
	}
	 move_uploaded_file($file_tmp,"upload_images/".time().$file_name);
	}
	$tour_image=time().$file_name;
	
	/*BASIC DATA*/
	$package_name=$_POST["pkg_name"];
	$package_desc=$_POST["description"];
	$package_price=$_POST["pkg_price"];
	//$offer_price=$_POST["offer"];
	//$show_offer=$_POST["show_offer"];
	$itinerary=$_POST["itinerary"];
	$package_duration=$_POST["duration"];
	$location=$_POST["location"];
	$category=$_POST["category"];
	$city=$_POST["city"];
	$country=$_POST["country"];
	$arr_date=$_POST["arrival_date"];
	$dept_date=$_POST["departure_date"];
	$package_date=$_POST["package_date"];
	$inclusion=$_POST["inclusion"];
	$exclusion=$_POST["exclusion"];

	$sql= "INSERT INTO package(city_id, category_id, country_id, package_name, package_description, package_price, about_itinerary, inclusion, exclusion, duration, location, arrival_date, departure_date, tour_image, package_date)VALUES('$category', '$city', '$country', '$package_name', '$package_desc', '$package_price', '$itinerary', '$inclusion', '$exclusion', '$package_duration', '$location', '$arr_date', '$dept_date', '$tour_image', '$package_date')";
	
	$res =$mysqli->query($sql);
	
	if(!$res)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	} 
	echo "<script>window.alert('Package added Successfully...!')</script>";
	
}

	$category_name="";	
	$sql_a="SELECT * FROM category";
	$res_a=$mysqli->query($sql_a); 
	if(!$res_a)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$city_name="";	
	$sql_b="SELECT * FROM city";
	$res_b=$mysqli->query($sql_b); 
	if(!$res_b)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$country_name="";	
	$sql_c="SELECT * FROM country";
	$res_c=$mysqli->query($sql_c); 
	if(!$res_c)
	{
		echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}
?>