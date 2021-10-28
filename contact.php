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

 <div class="container">
 <div class="contact-box">
   <div class="left"></div>
   <div class="right">
     <h2>Contact Me</h2>
     <input type="text" class="field" placeholder="Your Name">
     <input type="text" class="field" placeholder="Your Email">
     <input type="text" class="field" placeholder="Phone">
     <textarea placeholder="Message" class="field"></textarea>
     <button class="btn">Send</button>
   </div>
 </div>
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
