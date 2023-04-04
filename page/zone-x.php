<!DOCTYPE html>
<html>
<head>
    <title>FMTS</title>
    <link rel="stylesheet" href="../style/zone-x.css" >
    </head>
    
<body>   
    <h1>Track your material flow</h1> 
	<div class="navbar">
		<div class="dropdown">
		  <button class="dropbtn">Stock matiéres premiéres</button>
		  <div class="dropdown-content">
			<a href="../page/zone-x.html">Zone A</a>
			<a href="#">Zone B</a>
			<a href="#">Zone C</a>
		  </div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Production </button>
			<div class="dropdown-content">
            <a href="../page/zones.html">Extrusion</a>
            <a href="#">Impression</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Stock produits finis</button>
			<div class="dropdown-content">
				<a href="#">Zone A</a>
				<a href="#">Zone B</a>
				<a href="#">Zone C</a>
				</div>
		</div> 
	</div>

	<div id="Container">
        <p>Quantité de Stock</p>
        <form action="../affichage.php" method="POST"></form>
        <table id="quantité">
            <tr>
                <td><?php
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
			echo $restantes;
			?></td>
            </tr>
        </table>
	
</div>

	<?php
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'datasave');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM stockmp";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo 'erreur' . mysqli_error($conn);
        } else {
    ?>
    <div class="zone">
        <table id="mm">
            <tr>
                <th>Palette</th>
                <th>Emplacement</th>
                <th>code a barre</th>
                <th>Date et heure dentree</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['codepalette'] ?></td>
                    <td><?php echo $row['emplacement'] ?></td>
                    <td><?php echo $row['codeabarre'] ?></td>
                    <td><?php echo $row['dateheure'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
        }
        mysqli_close($conn);
    ?>

		</html>