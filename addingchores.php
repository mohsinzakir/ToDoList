
<?php 

if (isset($_GET["chore1"])) {

	$ch1 = $_GET["chore1"];
	$sql1 = "INSERT INTO 
	items (`description`) VALUES ('$ch1')";
	$result1 = $conn->query($sql1);
echo '<script type="text/javascript">';
echo ' alert("Your ToDoList Has Been Prepared")'; 
echo '</script>';

}
?>