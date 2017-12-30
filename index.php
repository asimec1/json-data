<?php
	$url = 'http://localhost/test/v1/data.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$characters = json_decode($data); // decode the JSON feed
	//select all characters
	print '
	<!DOCTYPE html>
	<html lang="en">
	<head>
		  <title>Characters from JSON</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <style>
			p {margin: 0.3em}
		  </style>
		</head>
		<body>
			<div class="container">
			<h1>RAW JSON</h1>
			<p>This is raw JSON file!</p>';
			print $data;
			
			echo '<h1>HTML &amp; CSS</h1>
			<p>This is converted JSON file in HTML!</p>';
			foreach ($characters as $character) {
				echo '<p>' . $character->name . ' <span style="font-style:italic">' . $character->race . '</span></p>';
			}
		print '
		</div>
	</body>
</html>';
?>