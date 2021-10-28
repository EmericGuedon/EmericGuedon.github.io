<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Portfolio Emeric Guédon</title>

		<link href="css/style.css" rel="stylesheet" type="text/css">

	</head>

  <body>

  <div class="navigation">
    <ul>
      <li class="list active">
        <a href="index.php">
          <span class="icon"><ion-icon name="home"></ion-icon></span>
          <span class="title">Home</span>
        </a>
      </li>
      <li class="list">
        <a href="portfolio.php">
          <span class="icon"><ion-icon name="folder"></ion-icon></span>
          <span class="title">Portfolio</span>
        </a>
      </li>
      <li class="list">
        <a href="contact.php">
          <span class="icon"><ion-icon name="people"></ion-icon></span>
          <span class="title">Contact</span>
        </a>
      </li>
      <li class="list">
        <a href="https://www.linkedin.com/in/emeric-guedon/" target="_blank">
          <span class="icon"><ion-icon name="logo-linkedin"></ion-icon></span>
          <span class="title">Linkedin</span>
        </a>
      </li>
    </ul>
  </div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

 <script>

	 let list = document.querySelectorAll('.list');
	 for (let i=0; i<list.length; i++){
		 list[i].onclick = function(){
			 let j =0;
			 while(j < list.length){
				 list[j++].className = 'list';
			 }
			 list[i].className = 'list active';
		 }
	 }
 </script>

  </body>
</html>
