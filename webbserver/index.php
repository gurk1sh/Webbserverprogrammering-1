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
			<?php
			require "header.php";
			?>
			<!--Egen fil -->
			<?php
			require "nav.php";
			?>
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<article>
						<figure>
							<img src="bilder/teknikum.jpg" alt=""/>
							<figcaption>Information</figcaption>
						</figure>
		
						<p>På denna sida kan du beställa exotiska frukter.</p>
	      
					</article>
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