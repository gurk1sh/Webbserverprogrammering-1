<?php
	require "connect.php";
?>

<!DOCTYPE html>
<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Template</title>
		 <link rel="stylesheet" href="Style/stilmall.css">
	</head>
  <body id="index">
    <div id="wrapper">
			<!--Egen fil -->
			<header><!--Sidhuvud-->
					<h1>A small template</h1>
			</header>
			<!--Egen fil -->
			<nav> <!--Menyn-->
				<ul>
					<li><a href="index.php">Start</a></li>
					<li><a href="sida2.php">Produkter</a></li>
					<li><a href="sida3.php">Kundvagn</a></li>
					<li><a href="#">Betalning</a></li>
				</ul>
			</nav>
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Daniel</figcaption>
						</figure>
		
						<p>Some text about Daniel.</p>
	      
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Andreas</figcaption>
						</figure>
		
						<p>Some text about Andreas</p>
	      
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
								<figcaption>Tomas</figcaption>
						</figure>
		
						<p>Some text about Tomas.</p>
	      
					</article>
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>David</figcaption>
						</figure>
		
							<p>Some Text about David.</p>
	      
					</article>
				</section>
				
				<aside id="aside">
				   <p>News</p>
				</aside>
			</main>
		</div>
		<!--Egen fil -->
		<footer>
			 Footer containing information regarding the website
		</footer>
  
  </body>
</html>