<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Template</title>
		 <link rel="stylesheet" href="Style/stilmall.css">
	</head>
  <body id="sida3">
    <div id="wrapper">
			<!--Egen fil -->
			<?php
			require "header.php";
			?>
			<!--Egen fil -->
			<?php
			require "nav.php";
			?>
			
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<h2>Varor</h2>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Vara 1</figcaption>
						</figure>
						
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Vara 2</figcaption>
						</figure>
		
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
								<figcaption>Vara 3</figcaption>
						</figure>
		
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Vara 4</figcaption>
						</figure>
						
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Vara 5</figcaption>
						</figure>
						
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Vara 6</figcaption>
						</figure>
				</section>
				
				<aside id="aside">
				   <p>News</p>
				</aside>
			</main>
		</div>
		<!--Egen fil -->
		<?php
			require "footer.php";
		?>
  
  </body>
</html>