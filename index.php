<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Azure Webanwendung</title>
</head>
<body>
	<header>
		<nav>
			<ul>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h1>Willkommen auf der ersten Azure Webanwendung - Trophy!</h1>
      			<h2>Diese Webanwendung wurde aus dem Code von diesem <a href="https://github.com/grimkroton/microapp">Repo</a> automatisiert ausgerollt</h2>
		      <?php
		        echo getHostByName(getHostName());
			echo phpinfo();
		      ?>
		</section>
	</main>
	<footer>
		<p></p>
	</footer>
</body>
</html>

