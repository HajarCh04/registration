<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php
  require_once "config.php";
  // REQUEST
  $sqlState = $pdo->query('SELECT * FROM formulaire');
  // GET VALUES
  $stagiaires = $sqlState->fetchAll(PDO::FETCH_OBJ);
  ?>

  <div class="container mt-5">
    <div class="float-end">
      <button class="btn btn-warning" type="submit" name="add"><a href="add.php">Add</a></button>
    </div>
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">CNI</th>
          <th scope="col">CNE Massar</th>
          <th scope="col">Date de Naissance</th>
          <th scope="col">Nationalité</th>
          <th scope="col">Niveau de Scolarité</th>
          <th scope="col">Catégorie</th>
          <th scope="col">Branche</th>
          <th scope="col">Ville</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Type de Formation</th>
          <th scope="col">Niveau de Formation</th>
          <th scope="col">Premier Choix</th>
          <th scope="col">Deuxième Choix</th>
          <th scope="col">Troisième Choix</th>
          <th scope="col">Genre</th>
          <th scope="col">Lieu de Naissance</th>
          <th scope="col">Nom</th>
          <th scope="col">Nom de Famille</th>
          <th scope="col">Prénom</th>
          <th scope="col">Prénom de Famille</th>
          <th scope="col">Nom du Père</th>
          <th scope="col">Nom de la Mère</th>
          <th scope="col">Prénom du Père</th>
          <th scope="col">Prénom de la Mère</th>
          <th scope="col">Adresse</th>
          <th scope="col">Téléphone Portable</th>
          <th scope="col">Téléphone 2</th>
          <th scope="col">Email</th>
          <th scope="col">Fichier 1</th>
          <th scope="col">Fichier 2</th>
          <th scope="col">Fichier 3</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($stagiaires as $stagiaire) {
        ?>
          <tr>
            <td><?= $stagiaire->ID ?></td>
            <td><?= $stagiaire->CNI ?></td>
            <td><?= $stagiaire->CNE_Massar ?></td>
            <td><?= $stagiaire->DateNaissance ?></td>
            <td><?= $stagiaire->Nationalite ?></td>
            <td><?= $stagiaire->NiveauScolarite ?></td>
            <td><?= $stagiaire->Categorie ?></td>
            <td><?= $stagiaire->Branche ?></td>
            <td><?= $stagiaire->Ville ?></td>
            <td><?= $stagiaire->Etablissement ?></td>
            <td><?= $stagiaire->TypeFormation ?></td>
            <td><?= $stagiaire->NiveauFormation ?></td>
            <td><?= $stagiaire->PremierChoix ?></td>
            <td><?= $stagiaire->DeuxiemeChoix ?></td>
            <td><?= $stagiaire->TroisiemeChoix ?></td>
            <td><?= $stagiaire->Genre ?></td>
            <td><?= $stagiaire->LieuDeNaissance ?></td>
            <td><?= $stagiaire->Nom ?></td>
            <td><?= $stagiaire->NomFamille ?></td>
            <td><?= $stagiaire->Prenom ?></td>
            <td><?= $stagiaire->PrenomFamille ?></td>
            <td><?= $stagiaire->NomPere ?></td>
            <td><?= $stagiaire->NomMere ?></td>
            <td><?= $stagiaire->PrenomPere ?></td>
            <td><?= $stagiaire->PrenomMere ?></td>
            <td><?= $stagiaire->Adresse ?></td>
            <td><?= $stagiaire->TelephonePortable ?></td>
            <td><?= $stagiaire->Telephone2 ?></td>
            <td><?= $stagiaire->Email ?></td>
            <td><?= $stagiaire->file1 ?></td>
            <td><?= $stagiaire->file2 ?></td>
            <td><?= $stagiaire->file3 ?></td>
            <td>
              <a href="update.php?id=<?= $stagiaire->ID ?>" class="btn btn-primary">Update</a>
              <a href="delete.php?id=<?= $stagiaire->ID ?>" onclick="return confirm('Voulez-vous vraiment supprimer le stagiaire <?= $stagiaire->Nom ?>');" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
