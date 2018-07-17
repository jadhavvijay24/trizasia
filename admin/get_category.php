<?php

include_once("config.php");

$id =$_GET['id'];
$sql_t="SELECT * FROM category WHERE category_id=".$id;

$res_t =$mysqli->query($sql_t); 
if(!$res_t)
{
	echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
}

?>
<option value="" >Select Category...</option>
<?php
	while ($row_t = $res_t->fetch_assoc()) { 
?>
<option value="<?php echo $row_t["category_id"];?>"><?php echo $row_t["category_name"];?></option>
<?php } ?>