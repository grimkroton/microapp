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
			<h1>Willkommen auf der ersten Azure Webanwendung!</h1>
      <h2>Dieser Container wurde aus dem Code von diesem <a href="https://github.com/grimkroton/microapp">Repo</a> automatisiert ausgerollt</h2>
      <?php
        phpinfo();
        echo getHostByName(getHostName());
      ?>
		</section>
	</main>
	<footer>
		<p></p>
	</footer>
</body>
</html>

