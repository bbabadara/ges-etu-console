<?php
///recuperer le contenu du fichier
$json = file_get_contents('data.json');

///convertir le json en array
$etudiants = json_decode($json,true);

print_r($etudiants);

///afficher tous les etudiants
//afficheTousLesEtudiants($etudiants);

//ajouter un etudiant
$newEtudiant=[
    "nom" => 'Fall',
    "prenom" => 'Modou',
    "email" => 'pentou@example.com',
    "telephone" => '7712955678',
    "classe_id" => 1
];

$etudiants[] = $newEtudiant;
print_r($etudiants);
//encoder
$json2=json_encode($etudiants);
file_put_contents('data3.json', $json2);
