<?php 
	class Display {

		private $all = [];

		public function __construct($all) {
			$this->all = $all;
		}

		public function displayAllData() {
			for ($i=0; $i < count($this->all); $i++) {
				echo "<tr>";
				for ($j=0; $j < count($this->all[$i]); $j++) { 
				 	echo "<td class='data'>".$this->all[$i][$j]."</td>";
				} 
				echo "</tr>";
			}
		}

		public function displayForm() {
			echo "<div class='placeBidBanner'>";
			echo "<br/><h2>Place your bids here!</h2>";
			echo "<h4>".$this->all[0][0]." | ".$this->all[0][3]." | ".$this->all[0][4]." | ".$this->all[0][5]."</h4>";
			echo "</div>";

			echo "<tr>";
			for ($i=1; $i < count($this->all); $i++) {
				$item = $this->all[$i][0]." | ".$this->all[$i][3]." | ".$this->all[$i][4]." | ".$this->all[$i][5];
				echo "<tr class='bidRow'>";
				echo "<td>";
				echo $item;
				echo "</td>";
				echo "<td>";
				echo "Bid: $ <input type='number' name='bidInput$i' min='0.01' step='0.01' placeholder='0.00'>";
				echo "<input type='hidden' name='itemName$i' value='$item'>";
				echo "</td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td>";

			echo "Shipping address:";
			echo "<input type='text' name='address'>";

			echo "</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>";

			echo "Email address:";
			echo "<input type='email' name='email'>";

			echo "</td>";
			echo "</tr>";
			
		}
	}
?>