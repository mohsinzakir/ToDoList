
<?php include "connection.php";
include "addingchores.php"?>
<html>
<head> 
	<title>To Do List</title>
</head>	

<body>
	<form action="" method="get">
		 Chore: <input type="text" name="chore1"><br>
		 Chore: <input type="text" name="chore2"><br>
		 Chore: <input type="text" name="chore3"><br>
		<input type="submit">
	</form>
	<form action="display.php" method="">
		Press the button to view your list
		<input type="submit" value="Click Here">
	</form>


</body>
</html>

