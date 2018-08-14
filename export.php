<?php 
include("db_connect.php"); 

if ($_POST["open_csv"]){
	$pass = $_POST["pass"];

	if($pass){
		$result = mysql_query("SELECT * FROM pass_table WHERE pass = 'q1w2e3'",$connect);
		if(mysql_num_rows($result) > 0){
			header("Location: contact.csv");
		}else{
			$msgerror = "Incorrect password!";
		}
	}else{
		$msgerror = "Fill the field!";
	}
}

if ($_POST["read_csv"]){
	$pass = $_POST["pass"];

	if($pass){
		$result = mysql_query("SELECT * FROM pass_table WHERE pass = 'q1w2e3'",$connect);
		if(mysql_num_rows($result) > 0){
			header("Location: contact.php");
		}else{
			$msgerror = "Incorrect password!";
		}
	}else{
		$msgerror = "Fill the field!";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Open CSV</title>
	<link rel="stylesheet" href="css/export-style.css">
</head>
<body>

	<div id="pass-form">
		<p>q1w2e3</p>
		<?php  
		if($msgerror){
			echo '<p id="msgerror">'.$msgerror.'</p>';
		}
		?>
		<form method="POST">
			<input type="password" name="pass" id="pass" placeholder="Input password please">
			<input type="submit" name="open_csv" id="open_csv" value="Open/download CSV">
			<input type="submit" name="read_csv" id="send_pass" value="Read CSV">
		</form>
	</div>
	
</body>
</html>