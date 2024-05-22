<?php
session_start();

// include "form1.php";
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  if (isset(
    $_POST['cni'],
    $_POST['cne'],
    $_POST['date_naiss'],
    $_POST['nationalite'],
    $_POST['niveau_scolaire'],
    $_POST['categorie'],
    $_POST['branche'],
    $_POST['ville'],
    $_POST['etablissement'],
    $_POST['type_formation'],
    $_POST['niveau_formation'],
    $_POST['premier_choix'],
    $_POST['deuxieme_choix'],
    $_POST['troisieme_choix'],
    $_POST['feminin'],
    $_POST['masculin'],
    $_POST['lieu_naissance'],
    $_POST['nom'],
    $_POST['nom_arabic'],
    $_POST['prenom'],
    $_POST['prenom_arabic'],
    $_POST['nom_pere'],
    $_POST['nom_mere'],
    $_POST['prenom_pere'],
    $_POST['prenom_mere'],
    $_POST['adresse'],
    $_POST['tele_portable'],
    $_POST['tele2'],
    $_POST['email'],
    $_POST['file1'],
    $_POST['file2'],
    $_POST['file3']
  )) {
    // Assign values to variables
    $cni = $_POST['cni'];
    $cne = $_POST['cne'];
    $date_naissance = $_POST['date_naiss'];
    $nationalite = $_POST['nationalite'];
    // form2
    $niveau_scolarite = $_POST['niveau_scolaire'];
    $categorie = $_POST['categorie'];
    $branche = $_POST['branche'];
    $ville = $_POST['ville'];
    $etablissement = $_POST['etablissement'];
    $type_formation = $_POST['type_formation'];
    $niveau_formation = $_POST['niveau_formation'];
    $premier_choix = $_POST['premier_choix'];
    $deuxieme_choix = $_POST['deuxieme_choix'];
    $troisieme_choix = $_POST['troisieme_choix'];
    // form3
    $genre_feminin = isset($_POST['feminin']) ? $_POST['feminin'] : "";
    $genre_masculin = isset($_POST['masculin']) ? $_POST['masculin'] : "";
    $lieu_naissance = $_POST['lieu_naissance'];
    $nom = $_POST['nom'];
    $nom_arabic = $_POST['nom_arabic'];
    $prenom = $_POST['prenom'];
    $prenom_arabic = $_POST['prenom_arabic'];
    $nom_pere = $_POST['nom_pere'];
    $nom_mere = $_POST['nom_mere'];
    $prenom_pere = $_POST['prenom_pere'];
    $prenom_mere = $_POST['prenom_mere'];
    $adresse = $_POST['adresse'];
    $telephone_portable = $_POST['tele_portable'];
    $telephone_2 = $_POST['tele2'];
    $email = $_POST['email'];
    // $confirm_email = $_POST['confirm_email'];
    // form4
    $file1 = $_POST['file1'];
    $file2 = $_POST['file2'];
    $file3 = $_POST['file3'];

    try {
      // Prepare the SQL statement
      $sqlState = $pdo->prepare('INSERT INTO formulaire (CNI, CNE, DateNaissance, Nationalite, NiveauScolarite, Categorie, Branche, Ville, Etablissement, TypeFormation, NiveauFormation, PremierChoix, DeuxiemeChoix, TroisiemeChoix, Genre, LieuDeNaissance, Nom, NomFamille, Prenom, PrenomFamille, NomPere, NomMere, PrenomPere, PrenomMere, Adresse, TelephonePortable, Telephone2, Email, file1, file2, file3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
      // $sqlState = $pdo->prepare('INSERT INTO formulaire (CNI, CNE) VALUES(null,
      // ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
      // ?, ?, ?, ?, ?, ?, ?)');
      $sqlState->execute([
        $cni, $cne, $date_naissance, $nationalite, $niveau_scolarite,
        $categorie, $branche, $ville, $etablissement, $type_formation, $niveau_formation,
        $premier_choix, $deuxieme_choix, $troisieme_choix, $genre_feminin, $genre_masculin,
        $lieu_naissance, $nom, $nom_arabic, $prenom, $prenom_arabic, $nom_pere, $nom_mere,
        $prenom_pere, $prenom_mere, $adresse, $telephone_portable, $telephone_2, $email,
        $file1, $file2, $file3
      ]);

      header('Location: success.php');
      exit();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  } else {
    echo "All form fields are required.";
  }
}

$currentStep = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $currentStep = $_SESSION["currentStep"];

  if (isset($_POST["prev-btn"])) {
    $currentStep--;
  } else {
    if ($currentStep == 4) {
      header("Location: success.php");
      exit();
    } else {
      $currentStep++;
    }
  }

  $_SESSION["currentStep"] = $currentStep;
} else {
  $_SESSION["currentStep"] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="inscription.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title></title>
</head>

<body>
  <div class="container">
    <header>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><i class="fa-solid fa-greater-than"></i></li>
        <li><a href="#">Online Registration</a></li>
      </ul>
    </header>

    <div class="content">
      <div class="steps">
        <span class="circle <?php echo $currentStep >= 1 ? 'active' : ''; ?>">1</span>
        <span class="circle <?php echo $currentStep >= 2 ? 'active' : ''; ?>">2</span>
        <span class="circle <?php echo $currentStep >= 3 ? 'active' : ''; ?>">3</span>
        <span class="circle <?php echo $currentStep == 4 ? 'active' : ''; ?>">4</span>
        <div class="progress-bar">
          <span class="indecator" style="width: <?php echo (($currentStep - 1) / (4 - 1)) * 100; ?>%;"></span>
        </div>
      </div>
    </div>

    <form method="POST">

      <div class="forms">
        <?php
        // include form
        switch ($currentStep) {
          case 1:
            include "form1.php";
            break;
          case 2:
            include "form2.php";
            break;
          case 3:
            include "form3.php";
            break;
          case 4:
            include "form4.php";
            break;
        }
        ?>

        <div class="buttons">
          <?php if ($currentStep > 1) : ?>
            <button class="prev-btn" name="prev-btn" type="submit">Previous</button>
          <?php endif; ?>
          <?php if ($currentStep == 4) : ?>
            <button class="submit-btn" type="submit" name="submit">Submit</button>
          <?php else : ?>
            <button class="next-btn" type="submit" name="submit">Next</button>
          <?php endif; ?>
        </div>
      </div>
    </form>
  </div>
</body>

</html>