-- Database: `registration`

CREATE TABLE formulaire (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    CNI VARCHAR(20) NOT NULL,
    CNE_Massar VARCHAR(20) NOT NULL,
    DateNaissance DATE NOT NULL,
    Nationalite VARCHAR(50) NOT NULL,
    NiveauScolarite VARCHAR(50) NOT NULL,
    Categorie VARCHAR(50) NOT NULL,
    Branche VARCHAR(50) NOT NULL,
    Ville VARCHAR(50) NOT NULL,
    Etablissement VARCHAR(100) NOT NULL,
    TypeFormation VARCHAR(50) NOT NULL,
    NiveauFormation VARCHAR(50) NOT NULL,
    PremierChoix VARCHAR(50) NOT NULL,
    DeuxiemeChoix VARCHAR(50) NOT NULL,
    TroisiemeChoix VARCHAR(50) NOT NULL,
    Genre VARCHAR(10) NOT NULL,
    LieuDeNaissance VARCHAR(100) NOT NULL,
    Nom VARCHAR(50) NOT NULL,
    NomArab VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    PrenomArab VARCHAR(50) NOT NULL,
    NomPere VARCHAR(50) NOT NULL,
    NomMere VARCHAR(50) NOT NULL,
    PrenomPere VARCHAR(50) NOT NULL,
    PrenomMere VARCHAR(50) NOT NULL,
    Adresse VARCHAR(255) NOT NULL,
    TelephonePortable VARCHAR(20) NOT NULL,
    Telephone2 VARCHAR(20),
    Email VARCHAR(100) NOT NULL,
    file1 VARCHAR(255),
    file2 VARCHAR(255),
    file3 VARCHAR(255)
);


-- values

INSERT INTO formulaire (
    CNI, CNE_Massar, DateNaissance, Nationalite, NiveauScolarite, Categorie, Branche, Ville, Etablissement, 
    TypeFormation, NiveauFormation, PremierChoix, DeuxiemeChoix, TroisiemeChoix, Genre, LieuDeNaissance, 
    Nom, NomFamille, Prenom, PrenomFamille, NomPere, NomMere, PrenomPere, PrenomMere, Adresse, 
    TelephonePortable, Telephone2, Email, file1, file2, file3
) VALUES
(
    'CNI123456', 'CNE123456789', '1995-08-15', 'Marocain', 'Baccalauréat', 'Scientifique', '', 'CASABLANCA N', 'Lycee Al Khawarizmi', 
    'Diplômante', '1st Year', 'Développement Digital', 'Développement Digital', 'Développement Digital', 'feminin', 'Rabat', 
    'Omar', 'عمر', 'Ali', 'علي', 'Ali', 'Fatima', 'Ahmed', 'Amina', '123 Street Name, Casablanca', 
    '0612345678', '0522123456', 'omar.elhassan@example.com', 'file1.pdf', 'file2.pdf', 'file3.pdf'
);
