<!DOCTYPE html>
<html>
<head>
<title>Delete Request</title>
<link rel="stylesheet" href="style12.css">
</head>
<body style="background-color:lightgrey">

	<p>
		<h1><u>Deleting Bus</u></h1>
	</p>
    <?php
    $conn = new mysqli('127.0.0.1', 'root', '', 'brt');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "successfully connected";


    $sql="SELECT * FROM bus ";

  $result= mysqli_query($conn,$sql);

  // keeps getting the next row until there are no more to get
  $row1=mysqli_fetch_array($result,MYSQLI_NUM);
  echo "<table border= 1>";
  echo "<th> Bus ID </th>";
  echo "<th> Driver ID </th>";
  echo "<th> Route ID </th>";
  echo "<th> Fare Charge </th>";
  echo "<th> Number of Passengers </th>";
  
  while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
  	{
	// Print out the contents of each row into a table
	echo "<form action='busdelete.php' method='Post'>";
	echo "<tr><td width= 100px>";
	
	echo $row1[0];
	$bus_id= $row1[0];
	echo "</td><td with= 100px>";
	echo $row1[1];
	echo "</td><td width= 100px>";
	echo $row1[2];
	echo "</td><td width= 100px>";
    echo $row1[3];
	echo "</td><td width= 100px>";
    echo $row1[4];
	echo "</td><td width= 100px>";
	echo "<input type='hidden' id='bus_id' name='bus_id' value='$bus_id'>";
	

	echo '<input type="submit" value="Delete">';
	echo '<a href="page1.php"><input type="button" id="back_btn" value="Back"/></a>';

	echo "</td></tr>";
	echo "</form>";
}

echo "</table>";



    ?>
  </body>
</html>
