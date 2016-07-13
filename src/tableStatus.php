<?php 
$pageTitle = "Table status";
include("includes/header.php"); 
include("connection.php")?>

	<main class= "golden">
		<?php
		echo "<table>";
			foreach ($results as $row) {
			   echo "<tr>";
			   foreach ($row as $column) {
				  echo "<td>$column</td>";
			   }
			   echo "</tr>";
			}    
			echo "</table>";
			
		?>
		
	</main>
	
<?php include("includes/footer.php"); ?>