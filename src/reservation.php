<?php 
$pageTitle = "Make Reservations";
include("includes/header.php"); ?>

	<main>
	
		<h4 class="golden"> Fill the form below to make a reservation. Please check the table status <a href="tableStatus.php">here</a>.</h4>
		
		<form method="post" action="process.php" class="form-horizontal">
		  
		<table class = "golden"> 
		  		 
		  <div class="form-group">
			  <tr>
				<th><label for="name" class="control-label col-md-2">Name</label></th>
				<div class="col-md-10">
					<td><input type="text" id="name" name="name" value="" /></td>
				</div>
			  </tr>
		  <div> 
		  
		  <tr>
		  <th><label for="email">Email</label></th>
		  <td><input type="text" id="email" name="email" /></td>
		  </tr>
		  
		  <tr>
		  <th><label for="timeIn">Time</label></th>
		  <td><input name="timeIn" type="time" id="timeIn"/> </td>
		  </tr>
		  
		  <tr>
		  <th><label for="count">Diner's Count</label></th>
		  <td><input name="count" type="number" id="count"/></td>
		  </tr>
		  
		  <tr>
		  <th><label for="tableNumber">Table Number</label></th>
		  <td><input name="tableNumber" type="number" id="tableNumber"/></td>
		  </tr>
		  
		</table>
		<input type="submit" value="Submit" />
		  
		</form>
	</main>
	
<?php include("includes/footer.php"); ?>