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
		
        
		<table>
			<tr>
				<th id="total" name="total" ></th>
			</tr>
    <?php include '../affichage.php';?>
        </table>
	
</div>

<table id="mm">
    <tr>
        <th id="Palette" name="codepalette" >Palette</th>
        <th id="emplacement" name="emplacement" >Emplacement</th>
        <th id="codeabarre" name="codeabarre">code a barre</th>
        <th id="dateheure" name="dateheure" >Date et heure dentree</th>
    </tr>
    <?php include '../table.php';?>
</table>
</body>

		</html>
