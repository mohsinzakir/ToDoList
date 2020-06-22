<link rel="stylesheet" type="text/css" href="./style.css">

<?php include "connection.php";
include "addingchores.php"?>

<h2>My Todo List</h2>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="" method="get">
			<h1>Add Task</h1>
			 Chore: <input type="text" name="chore1"><br>
			<input type="submit">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
