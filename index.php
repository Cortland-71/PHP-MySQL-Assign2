<?php 
	$images = [];
	for ($i=0; $i < 13; $i++) array_push($images, "imgs/$i.jpg");
	shuffle($images);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Carrillo-Assign2</title>
</head>
<body>
	<div class="container">
		
		<div class="header">
			<h1>Bids Project v2</h1>
			<h6>Cortland Carrillo PHP and MySQL</h6>
		</div>

		<div class="posters">
			<?php 
				for ($i=0; $i < 4; $i++) {
				 	echo "<td style=\"width: 33%; text-align: center\"><img src=\"";
				 	echo $images[$i];
				 	echo "\"/></td>";
				} 
			?>
		</div>

		<?php 
			#Read in all Data
			include("display.php");
			include("reader.php");
			$reader = new Reader();
			$display = new Display($reader->getAllData());
		?>

		<!-- Display data as a table -->
		<div>
			<table class="dataTable">
			<?php $display->displayAllData(); ?>
			</table>
		</div>
		
		<!-- Display form to user to enter bids -->

		<form action="process.php" method="POST">
			<table class="bidTable">
				<?php $display->displayForm(); ?>
			</table>
			<div style="text-align:center;"><input type="submit" value="Submit"></div>
		</form>
	</div>
</body>
</html> 