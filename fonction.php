<?php

function getAllEtudiant(array $etudiants): void{
    foreach ($etudiants as $etudiant) {
        echo "matricule: " . $etudiant['matricule']; 
        echo "nom: " . $etudiant['nom'];
        echo "prenom: " . $etudiant['prenom'];
        echo "email: " . $etudiant['email'];
        echo "telephone: " . $etudiant['telephone'];
        echo "classe: " . $etudiant['classe_id'];
    }
};
getAllEtudiant($etudiants);