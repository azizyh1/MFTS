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
$row = mysqli_fetch_assoc($result);
$restantes = $row["total"];

// Afficher le nombre de données restantes dans la table
echo "la quantité de matière restante : $restantes";
?>