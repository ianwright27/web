<!DOCTYPE html>
<html>
<head>
<title>Delete Request</title>
<link rel="stylesheet" href="style12.css">
</head>
<body style="background-color:lightgrey">

	<p>
		<h1><u>Deleting Chart</u></h1>
	</p>
    <?php
    $conn = new mysqli('127.0.0.1', 'root', '', 'brt');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "successfully connected";


    $sql="SELECT * FROM chart ";

  $result= mysqli_query($conn,$sql);

  // keeps getting the next row until there are no more to get
  $row1=mysqli_fetch_array($result,MYSQLI_NUM);
  echo "<table border= 1>";
  echo "<th> Route ID </th>";
  echo "<th> Bus ID </th>";
  echo "<th> Departure Station </th>";
  echo "<th> Arrival Station </th>";
  echo "<th> Departure Time </th>";
  echo "<th> Arrival Time </th>";
  echo "<th> Day </th>";
  echo "<th> Price </th>";
  echo "<th> County </th>";
  
  while($row1=mysqli_fetch_array($result,MYSQLI_NUM))
  	{
	// Print out the contents of each row into a table
	echo "<form action='chartdelete.php' method='Post'>";
	echo "<tr><td width= 100px>";
	
	echo $row1[0];
	$route_id= $row1[0];
	echo "</td><td with= 100px>";
	echo $row1[1];
	echo "</td><td width= 100px>";
	echo $row1[2];
	echo "</td><td width= 100px>";
    echo $row1[3];
	echo "</td><td width= 100px>";
    echo $row1[4];
	echo "</td><td width= 100px>";
	echo $row1[5];
	echo "</td><td width= 100px>";
	echo $row1[6];
	echo "</td><td width= 100px>";
	echo $row1[7];
	echo "</td><td width= 100px>";
	echo $row1[8];
	echo "</td><td width= 100px>";
	echo "<input type='hidden' id='route_id' name='route_id' value='$route_id'>";
	

	echo '<input type="submit" value="Delete">';
	echo '<a href="page1.php"><input type="button" id="back_btn" value="Back"/></a>';

	echo "</td></tr>";
	echo "</form>";
}

echo "</table>";



    ?>
  </body>
</html>
