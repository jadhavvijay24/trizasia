<?php

$mysqli = new mysqli("localhost", "admin", "123456", "vijay");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

	if(isset($_GET["studentid"]))
	{
		$studentid=$_GET["studentid"];
	}
	if($studentid=="")
	{
		header("location:list.php");
	}
	if(isset($_POST["submit"]))
	{		
		$uname=$_POST["uname"];
		$surname=$_POST["surname"];
		$mobile=$_POST["mobile"];
		$mailid=$_POST["mailid"];
		$gender=$_POST["gender"];
		$date=$_POST["date"];
		$sql="UPDATE personal_info SET uname='".$uname."', surname='".$surname."', mobile='".$mobile."', mailid='".$mailid."', gender='".$gender."', date='".$date."' Where sr_id=".$studentid ;
		$res =$mysqli->query($sql);
		if(!$res)
		{
			echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
		}
	}
	$sql="SELECT  * FROM  personal_info WHERE sr_id=".$studentid ;
	$res =$mysqli->query($sql);

if(!$res)
{
	echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
}

echo "Edit Page";
echo "<table border='1'>";
$row = $res->fetch_assoc();
?>
<html>
<body>

<form action="" method="POST">
<table>

<tr> <td>Name </td><td>: <input type="test" name="uname" value="<?php echo $row["uname"]?>"></td></tr>
<tr> <td>Surname </td><td>: <input type="test" name="surname" value="<?php echo $row["surname"]?>"></td></tr>
<tr> <td>Mobile No. </td><td>: <input type="test" name="mobile" value="<?php echo $row["mobile"]?>"></td></tr>
<tr> <td>Email ID </td><td>: <input type="test" name="mailid" value="<?php echo $row["mailid"]?>"></td></tr>
<tr> <td>Gender </td><td>: <input type="test" name="gender" value="<?php echo $row["gender"]?>"></td></tr>
<tr> <td>Date of Birth </td><td>: <input type="test" name="date" value="<?php echo $row["date"]."/".$row["month"]."/".$row["year"] ?>"></td></tr>
</table>
<input type="submit" name="submit" value="Save">
</form>

</body>
</html>