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
			<main> <!--Huvudinneh�ll-->
				<section id="content">
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Information</figcaption>
						</figure>
		
						<p>P� denna sida kan du best�lla exotiska frukter.</p>
	      
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