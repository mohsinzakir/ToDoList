
<?php 

if (isset($_GET["chore1"])) {

	$ch1 = $_GET["chore1"];
	$ch2 = $_GET["chore2"];
	$ch3 = $_GET["chore3"];
	$sql1 = "INSERT INTO 
	items (`description`) VALUES ('$ch1')";
	$sql2 = "INSERT INTO 
	items (`description`) VALUES ('$ch2')";
	$sql3 = "INSERT INTO 
	items (`description`) VALUES ('$ch3')";
	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	$result3 = $conn->query($sql3);
echo '<script type="text/javascript">';
echo ' alert("Your ToDoList Has Been Prepared")'; 
echo '</script>';

}
?>