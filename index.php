<?php
$etudiants=[
    ['matricule'=>'MAT0001','nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'cD3yv@example.com','telephone'=>"7712345678",'classe_id'=>1],
];
$classes=[
    ['id'=>1,'code' => 'L1DevWeb', 'libelle' => 'Licence 1 Dev Web'],
    ['id'=>2,'code' => 'L2DevWeb', 'libelle' => 'Licence 2 Dev Web'],
    ['id'=>3,'code' => 'L3DevWeb', 'libelle' => 'Licence 3 Dev Web']  
];

function afficherMenu():void{
    echo "1-Lister les étudiants \n";
    echo "2-Ajouter un étudiant \n";
    echo "3-Voir les details d'un étudiant \n";
    echo "4-Voir les etudiants d'une classe \n";
    echo "5-Quitter \n";
}

afficherMenu();