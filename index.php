<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Portfolio Emeric Guédon</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<?php include 'navbar.php'?>

 <div class="parent">

		<div class="home">
			<h1>Emeric Guedon</h1>
			 <div class="textHome">
			   <p>Sound Designer</p>
		   </div>
		</div>

		<div id='container'>
			<canvas id="canvas3d"></canvas>
		</div>

		<script src="https://unpkg.com/three@^0.131.0/build/three.min.js"></script>
		<script src="runtime.js"></script>
		<script>
			const app = new SpeRuntime.Application();
			app.start('./scene.json');
		</script>

</div>
	</body>
</html>
