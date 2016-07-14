<?php 
$pageTitle = "Table status";
include("includes/header.php"); 
include("connection.php")?>

	<main class= "golden">
	
		<h3>Table Status</h3>
		
		<table class = "table table-bordered table-striped table-responsive">
			
			<tr>
				<th>#</th>
				<th>Location</th>
				<th>Chair Count</th>
			</tr>
			<?php
				foreach ($rows as $row) {
				   echo "<tr>";
				   foreach ($row as $column) {
					  echo "<td>$column</td>";
				   }
				   echo "</tr>";
				}  
			?>

		</table>
			
		
		
	</main>
	
<?php include("includes/footer.php"); ?>