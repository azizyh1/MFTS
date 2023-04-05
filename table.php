<?php
// Establish a connection to the database
$conn = mysqli_connect('localhost', 'root', '', 'datasave');

// Check the connection
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

// Query the database to retrieve the data
$sql = 'SELECT * FROM stockmp';
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
	die('Error retrieving data: ' . mysqli_error($conn));
}

// Display the data in the table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['codepalette'] . '</td>';
	echo '<td>' . $row['emplacement'] . '</td>';
	echo '<td>' . $row['codeabarre'] . '</td>';
	echo '<td>' . $row['dateheure'] . '</td>';
	echo '</tr>';
}

// Close the connection to the database
mysqli_close($conn);
?>