<?php
// Établir une connexion avec la base de données
$conn = mysqli_connect("localhost", "root", "", "datasave");

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Effectuer une requête SQL pour récupérer le nombre de données restantes dans la table
$sql = "SELECT COUNT(*) AS total FROM stockmp ";
$result = mysqli_query($conn, $sql);

// Vérifier si la requête a réussi
if (!$result) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Récupérer le nombre de données restantes dans la table

while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['total'] . '</td>';
	echo '</tr>';
}

?>