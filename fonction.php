<?php
require_once("index.php");
function getEtudiantByMatricule(array $tabEtudiants, string $matricule):void{
    foreach($tabEtudiants as $key=>$etudiant){
        $val =0;
        if($etudiant['matricule'] == $matricule){
            echo "matricule :". $etudiant['matricule'] ."\n";
            echo "nom :". $etudiant['nom']."\n" ;
            echo "prenom :". $etudiant['prenom']."\n" ;
            echo "email :". $etudiant['email'] ."\n";
            echo "telephone :". $etudiant['telephone']."\n" ;
            $val=1;
            break;
        } 
    }
    if($val==0){
        echo "Cet etudiant n'existe pas";
    }
    
}

$matricule = 'MAT0001';
getEtudiantByMatricule($etudiants,$matricule)."\n";


?>