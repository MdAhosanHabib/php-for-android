<?php
$connection = mysqli_connect("localhost","root","","students")
or die("Error " . mysqli_error($connection));

$sql = "select * from sudent_info";
$result = mysqli_query($connection, $sql)
or die("Error in Selecting " . mysqli_error($connection));

$studentarray = array();
while($row = mysqli_fetch_assoc($result))
{
	$studentarray['sudent_info'] [] = $row;
}
$output = json_encode($studentarray);
echo $output;

mysqli_close($connection);
?>