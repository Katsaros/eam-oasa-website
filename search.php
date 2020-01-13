<?php
	require_once "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Αναζήτηση</title>
  </head>
  <body>
	<?php
	// Initialize the session
	session_start();
	// Check if the user is logged in, if not then show logoutmenu
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
		include 'topMenu.php';
	}
	else
	{
		include 'topMenuLoggedIn.php';
	}
	?>
    <h2 class="page-header">Αναζήτηση</h2>
	
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
	<form method="POST" action="search.php" style="display: flex;">
			<input type="text" class="form-control" name="q" placeholder="Γράψτε όρο αναζήτησης" />
			<input type="submit" name="search" class="btn btn-primary" value="Αναζήτηση" />
		</div> 
	</form>
	</div>
	
    <?php
		if(isset($_POST['search']))
		{
		   mysqli_set_charset($link, "utf8");
			$q = $_POST['q'];
			
			$sql = "SELECT * FROM search_route WHERE starting_point LIKE '$q%'";
			$result = $link->query($sql);
			if ($result > 0) 
			{
				echo "<table>
				<tr>
					<th>ID</th>
				</tr>";
				while($row = $result->fetch_assoc())
				{
						echo "
							<tr>
								<td>" . $row['id'] . "</td>
							</tr>";                
				}
				echo "</table>";  
			}
			else
			{
				echo "<table>
				<tr>
					<th>Κανένα Αποτέλεσμα</th>
				</tr>";
				echo "</table>";  
			}
		}
		$link->close();
	?>
  </body>
</html>