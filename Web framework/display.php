<?php include('conn.php') ?>

<!DOCTYPE html>
<html>	
	<head>
		<title>Display!</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
	</head>
	
	<body>
	<div style="overflow-x:auto;">

	<?php 
		echo '<table class=tab align="center">';
			
		$query = "SELECT * FROM person";
		$result = mysqli_query($db, $query);
	
		if (mysqli_num_rows($result) > 0) {
			 
				echo "<tr>";
					echo "<th>Name</th>";
					echo "<th>Location</th>";
					echo "<th>Time</th>";
				echo "</tr>";
				
			while ($row = mysqli_fetch_array($result)) {
				$field1name = $row["Name"];
				$field2name = $row["Location"];
				$field3name = $row["Time"];
				
 
				echo'<tr>
						  <td>'.$field1name.'</td> 
						  <td>'.$field2name.'</td> 
						  <td>'.$field3name.'</td>  
					  </tr>';
			}
		echo '</table>';
		} 
		else{
        echo "No records matching your query were found.";
		}

	?>	
	</div>
	</body>
</html>
