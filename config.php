<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=registration', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
  die("error " . $e->getMessage());
}


// ID	CNI	CNE_Massar	DateNaissance	Nationalite	NiveauScolarite	Categorie	Branche	Ville	Etablissement	TypeFormation	NiveauFormation	PremierChoix	DeuxiemeChoix	TroisiemeChoix	Genre	LieuDeNaissance	Nom	NomFamille	Prenom	PrenomFamille	NomPere	NomMere	PrenomPere	PrenomMere	Adresse	TelephonePortable	Telephone2	Email	file1	file2	file3	
// Query results operations