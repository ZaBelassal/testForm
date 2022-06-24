<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<!-- <script type="text/javascript" src="script.js"></script> -->
</head>
<body>
	<?php 
     	$name = $_COOKIE["fullname"];
		$mail = $_COOKIE["email"];
		$pass = $_COOKIE["password"];

	
	?>

	<div id="zakaria">
		<h3>
			<?php echo "hello <div>".$name." </div>your mail is: <div>".$mail." </div> and password : is <div style='visibility:visible' id='password'> ".$pass."</div> 
                        <button id='togglePassword'>Voir</button>";  
						?>
        </h3>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>