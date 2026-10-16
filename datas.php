
<?php
session_start();
// session_destroy();
// die("Session nettoyé!");

$icones_filieres=[
    "DEV-WEB"=>"fa-code",
    "RES-INFO"=>"fa-network-wired",
    "DES-GRA"=>"fa-palette",
    "GEN-LOG"=>"fa-laptop-code",
    "MAR-COM"=>"fa-bullhorn",
    "DAT-ANA"=>"fa-chart-pie",
];

$icones_classes=[
    "DEV-WEB-L2-A"=>"fa-code",
    "DEV-WEB-L1-A"=>"fa-code",
    "RES-INFO-L1-A"=>"fa-network-wired",
    "GENIE-LOG-L3-A"=>"fa-laptop-code",
    "DEV-WEB-L2-B"=>"fa-code",
    "RES-INFO-L2-A"=>"fa-network-wired",
];

$filieres=[
    ["code"=>"DEV-WEB", "nom"=>"Développement Web", "responsable"=>"M. Cheikh Diop", "description"=>"154 étudiants", "photo"=>"image/devw.jpg" ],
    ["code"=>"RES-INFO", "nom"=>"Réseaux Informatiques", "responsable"=>"Mme Ndèye Fall", "description"=>"132 étudiants", "photo"=>"image/Res.jpg" ],
    ["code"=>"DES-GRA", "nom"=>"Designe graphique", "responsable"=>"M. Ibrahima Ba", "description"=>"98 étudiants", "photo"=>"image/des.jpg" ],
    ["code"=>"GEN-LOG", "nom"=>"Génie Logiciel", "responsable"=>"M. Mamadou Kane", "description"=>"76 étudiants", "photo"=>"image/gen.jpg" ],
    ["code"=>"MAR-COM", "nom"=>"Marketing & Communication", "responsable"=>"Mme Aissatou Sow", "description"=>"56 étudiants", "photo"=>"image/mark.jpg" ],
    ["code"=>"DAT-ANA", "nom"=>"Data analyst", "responsable"=>"M. Ousmane Sy", "description"=>"32 étudiants", "photo"=>"image/data.jpg" ],

];

$niveaux=[
    ["code"=>"L1", "libelle"=>"LICENCE 1" ],
    ["code"=>"L2", "libelle"=>"LICENCE 2" ],
    ["code"=>"L3", "libelle"=>"LICENCE 3" ],
    ["code"=>"M1", "libelle"=>"MASTER 1" ],
    ["code"=>"M2", "libelle"=>"MASTER 2" ],
];

$classes=[
    ["code"=>"DEV-WEB-L1-A", "nom"=>"L1 Développement Web A", "filiere"=>"Développement Web", "niveau"=>"L1", "capacite"=>"40"],
    ["code"=>"DEV-WEB-L2-A", "nom"=>"L2 Développement Web A", "filiere"=>"Développement Web", "niveau"=>"L2", "capacite"=>"45"],
    ["code"=>"RES-INFO-L1-A", "nom"=>"L1 Réseaux Informatiques A", "filiere"=>"Réseaux Informatiques", "niveau"=>"L1", "capacite"=>"35"],
    ["code"=>"GENIE-LOG-L3-A", "nom"=>"L3 Génie Logiciel A", "filiere"=>"Génie Logiciel", "niveau"=>"L3", "capacite"=>"30"],
    ["code"=>"DEV-WEB-L2-B", "nom"=>"L2 Développement Web B", "filiere"=>"Développement Web", "niveau"=>"L2", "capacite"=>"38"],
    ["code"=>"RES-INFO-L2-A", "nom"=>"L2 Réseaux Informatiques A", "filiere"=>"Réseaux Informatiques", "niveau"=>"L2", "capacite"=>"42"],

];

$etudiants=[
    ["matricule"=>"E2210544", "nom"=>"Diop", "prenom"=>"Awa", "date de naissance"=>"14/05/2001", "sexe"=>"F", "telephone"=>"76 824 93 08", "adresse"=>"Dakar, Parcelles Assainies", "classe"=>"DEV-WEB-L2-A", ],
    ["matricule"=>"E2210545", "nom"=>"Fall", "prenom"=>"Aliou", "date de naissance"=>"22/11/2002", "sexe"=>"M", "telephone"=>"77 555 12 34", "adresse"=>"Pikine, Tally Bou Bess", "classe"=>"RES-INFO-L1-A", ],
    ["matricule"=>"E2210546", "nom"=>"Ba", "prenom"=>"Fatou", "date de naissance"=>"30/10/2005", "sexe"=>"F", "telephone"=>"76 444 56 78", "adresse"=>"Guédiawaye, Hamo 4", "classe"=>"DEV-WEB-L1-A", ],
    ["matricule"=>"E2210547", "nom"=>"Kane", "prenom"=>"Moussa", "date de naissance"=>"03/08/2003", "sexe"=>"M", "telephone"=>"78 333 90 12", "adresse"=>"Rufisque, Quartier Dangou", "classe"=>"GENIE-LOG-L3-A", ],
    ["matricule"=>"E2210548", "nom"=>"Sow", "prenom"=>"Mariama", "date de naissance"=>"19/01/2004", "sexe"=>"F", "telephone"=>"78 333 90 12", "adresse"=>"Dakar, Grand Yoff", "classe"=>"DEV-WEB-L2-B", ],
];


if (!isset($_SESSION["icones_filieres"])) {
    $_SESSION["icones_filieres"]=$icones_filieres;
}

if (!isset($_SESSION["icones_classes"])) {
    $_SESSION["icones_classes"]=$icones_classes;
}

if (!isset($_SESSION["filieres"])) {
    $_SESSION["filieres"]=$filieres;
}

if (!isset($_SESSION["niveaux"])) {
    $_SESSION["niveaux"]=$niveaux;
}

if (!isset($_SESSION["classes"])) {
    $_SESSION["classes"]=$classes;
}
if (!isset($_SESSION["etudiants"])) {
    $_SESSION["etudiants"]=$etudiants;
}

function getClasseById(string $code):?array {
    foreach ($_SESSION["classes"] as $c) {
        if ($c["code"] === $code) {
            return $c;
        }
}
return null;
}
?>