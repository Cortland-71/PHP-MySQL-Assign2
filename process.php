<?php 
	echo '<link rel="stylesheet" type="text/css" href="styles.css">';

	echo "<div class='container'>";
	echo "<div class='header'>";
	echo "<h1>Bid Ticket</h1>";
	echo "<h6>Cortland Carrillo PHP and MySQL</h6>";
	echo "</div>";

	$total = 0;
	for ($i=1; $i < 9; $i++) { 
		if (trim($_POST["bidInput$i"]) != "") {
			$total+=$_POST["bidInput$i"];
			echo "Item".$_POST["itemName$i"]."Bid $".$_POST["bidInput$i"]."<br/><br/>";
		}
	}
	echo "<h3>Total Bids $".$total;
	echo "<h3>Shipping Address: ".$_POST["address"];

	echo "</div>";
?>