<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Open CSV</title>
	<link rel="stylesheet" href="css/export-style.css">
</head>
<body>

	<div id="block-info">
		<p>
			<?php
			$row = 1;
			$handle = fopen("contact.csv", "r");
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$num = count($data);
				$row++;
				for ($c=0; $c < $num; $c++) {
					echo $data[$c] . "<br />\n";
				}
			}
			fclose($handle);
			?> 
		</p>
	</div>
	
	
</body>
</html>