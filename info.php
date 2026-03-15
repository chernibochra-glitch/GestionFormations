<?php
echo("helloworld");
$nom="cherni";
$prenom="bochra";

$formation=array("Réseaux", "Sécurité", "Base de données");
foreach ($formation  as $formations ) {
    echo $formations ."|";

}

$formation=["Réseaux", "Sécurité", "Base de données"];
for($i=0 ;$i<count($formation);$i++ ){
    echo $formation[$i] ."|";
}

$formation=array();
$foramtion=["Réseaux"];
$formation=["Sécurité"];
$formation=["Base de données"];

while($i<count($formation)){
    echo $formation[$i] ."|";
    $i++;
}

$utilisateur = [
"nom" => "cherni",
"prenom" => "bochra",
"email" => "bochra@email.com",
"formation" => "Base de données",
];

echo "Nom : " . $utilisateur["nom"] . "\n";
echo "Prénom : " . $utilisateur["prenom"] . "\n";
echo "Email : " . $utilisateur["email"] . "\n";
echo "Formation : " . $utilisateur["formation"];

$formations = [
["nom" => "Réseaux", "duree" => "3 mois"],
["nom" => "Sécurité", "duree" => "2 mois"],
["nom" => "Base de données", "duree" => "4 mois"]
];
foreach ($formations as $f) {
echo "Formation : " . $f["nom"] .
" - Durée : " . $f["duree"] . "\n";

}

$utilisateur = [
    "nom" => "cherni",
    "prenom" => "bochra",
    "email" => "bochra@email.com",
    "formation" => "Sécurité",
    
];

$age = 20;

if (!is_numeric($age) || $age <= 0) {
    echo "Erreur : L'âge doit être un nombre supérieur à 0.";
} else {
    echo "Âge valide.";
}
?>