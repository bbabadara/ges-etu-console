<?php
function afficherAllEtudiants(array $etudiants){
    foreach($etudiants as $etudiant){
        foreach($etudiant as $key =>$value){
             echo ucfirst($key ." : " .$value . "\n");
        }
       
    }
}
afficherAllEtudiants($etudiants);