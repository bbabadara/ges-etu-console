<?php
function afficherEtudiant( $etudiants, $etudiant){
    foreach ($etudiants as $key =>$value){
        echo(
           $key. " :".$value ."\n"
        );
    }
}

afficherEtudiant($etudiants,$etudiant);