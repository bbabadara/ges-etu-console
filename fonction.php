<?php
function saisiUnEtudiant(array $newEtudiant):array{
    $nom = readline("saisir votre nom: ");
    $prenom = readline("saisir votre prenom: ");
    $email = readline("saisir votre email: ");
    $telephone = readline("saisir telephone: ");

    $newEtudiant =  [
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "telephone" => $telephone,
    ];
    return $newEtudiant;
}