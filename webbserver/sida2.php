<?php
class fetchItems 
{
	
	public function getItem() { 
		$produkt1 = "SELECT * FROM `produkter` WHERE 1";
		$result = $conn->query($produkt1);
		
		echo $produkt1;
	}
}
	
$obj = new fetchItems;
 
$obj->getItem();
?>

<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Template</title>
		 <link rel="stylesheet" href="Style/stilmall.css">
	</head>
  <body id="sida2">
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
					<table>
						<thead>
							<tr>
								<th>Namn</th>
								<th>Beskrivning</th>
								<th>Pris</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Vara 1</td>
								<td>Någon beskrivning</td>
								<td>356 kr</td>
								<td><a href="#">Köp</a></td>
							</tr>
							<tr>
								<td>Vara 2</td>
								<td>Någon beskrivning</td>
								<td>167 kr</td>
								<td><a href="#">Köp</a></td>
							</tr>
							<tr>
								<td>Vara 3</td>
								<td>Någon beskrivning</td>
								<td>389 kr</td>
								<td><a href="#">Köp</a></td>
							</tr>
							<tr>
								<td>Vara 4</td>
								<td>Någon beskrivning</td>
								<td>217 kr</td>
								<td><a href="#">Köp</a></td>
							</tr>
						</tbody>
					</table>

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