<?php
// $etudiants=[
//     ['matricule'=>'MAT0001','nom' => 'Dupont', 'prenom' => 'Jean', 'email' => 'cD3yv@example.com','telephone'=>"7712345678",'classe_id'=>1],
//     ['matricule'=>'MAT0002','nom' => 'Ndiaye', 'prenom' => 'Fatou', 'email' => 'fad@example.com','telephone'=>"7712345679",'classe_id'=>2],
//      ['matricule'=>'MAT0003','nom'=>'Martin','prenom'=>'Claire','email'=>'claire.martin@example.com','telephone'=>'7712345680','classe_id'=>1],
//     ['matricule'=>'MAT0004','nom'=>'Diallo','prenom'=>'Moussa','email'=>'moussa.diallo@example.com','telephone'=>'7712345681','classe_id'=>3],
//     ['matricule'=>'MAT0005','nom'=>'Bernard','prenom'=>'Lucas','email'=>'lucas.bernard@example.com','telephone'=>'7712345682','classe_id'=>2],
//     ['matricule'=>'MAT0006','nom'=>'Fall','prenom'=>'Aminata','email'=>'aminata.fall@example.com','telephone'=>'7712345683','classe_id'=>1],
//     ['matricule'=>'MAT0007','nom'=>'Moreau','prenom'=>'Sophie','email'=>'sophie.moreau@example.com','telephone'=>'7712345684','classe_id'=>3],
// ];



$classes=[
    ['id'=>1,'code' => 'L1DevWeb', 'libelle' => 'Licence 1 Dev Web'],
    ['id'=>2,'code' => 'L2DevWeb', 'libelle' => 'Licence 2 Dev Web'],
    ['id'=>3,'code' => 'L3DevWeb', 'libelle' => 'Licence 3 Dev Web']
];

//fonction qui retourne tous les etudiants 
function getAllEtudiants():array{
    $file="data.json";
    $json=file_get_contents($file);
    $etudiants=json_decode($json,true);
    return $etudiants;
}
//fonction qui retourne un etudiant par son matricule
function getEtudiantByMAtricule(string $matricule):array|null{
    $etudiants=getAllEtudiants();
    foreach ($etudiants as $etudiant) {
        if($etudiant["matricule"]==$matricule){
            return $etudiant;
        }
    }
    return null;
}
function getEtudiantsByClasse(int $id):array{
    $etudiants= getAllEtudiants();
  return array_filter($etudiants,fn($e)=>$e["classe_id"]==$id);
}
//fonction qui affiche un etudiant
function afficheUnEtudiant(array $etudiant):void{
    echo "=================================\n";
     echo "\tNom: ".$etudiant['nom']."\n";
     echo "\tPrenom: ".$etudiant['prenom']."\n";
     echo "\tMatricule: ".$etudiant['matricule']."\n";
     echo "\tEmail: ".$etudiant['email']."\n";
     echo "\tTelephone: ".$etudiant['telephone']."\n";
     echo "\tClasse: ".$etudiant['classe_id']."\n";
     echo "=================================\n";
}

//fonction qui affiche tous les etudiants
function afficheTousLesEtudiants(array $etudiants):void{
    foreach ($etudiants as  $etudiant) {
       afficheUnEtudiant($etudiant);
    }
}


//fonction qui permet de valider l'email
function validerEmail($email){
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if(preg_match($pattern, $email)) {
    return true;
    } else {
    return false;
    }
}

//fonction qui saisie et  retourne un etudiant 
function saisiUnEtudiant():array{
    $matricule = readline("saisir votre matricule: ");
    $nom = readline("saisir votre nom: ");
    $prenom = readline("saisir votre prenom: ");
    $email = readline("saisir votre email: ");
    $telephone = readline("saisir telephone: ");
    $classe_id = readline("saisir votre classe id: ");

    return [
        "matricule" => $matricule,
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "telephone" => $telephone,
        "classe_id" => $classe_id
    ];
}

//fonction qui affiche le menu
function afficherMenu():void{
    echo "=================================\n";
    echo "\t Menu: \n";
    echo "=================================\n";

    echo "1-Lister les étudiants \n";
    echo "2-Ajouter un étudiant \n";
    echo "3-Voir les details d'un étudiant \n";
    echo "4-Voir les etudiants d'une classe \n";
    echo "5-Quitter \n";
}

function ajouterEtudiant(array $etudiant):void{
    $etudiants=getAllEtudiants();
    $etudiants[]=$etudiant;
    $json=json_encode($etudiants);
    file_put_contents('data.json', $json);
    
}

do {
    afficherMenu();
    $choix = readline("Votre choix : ");
    switch ($choix) {
        case 1:
            echo "\nLister les étudiants \n";
            $all=getAllEtudiants();
            afficheTousLesEtudiants($all);
            break;
        case 2:
            echo "Ajouter un étudiant \n";
            $etudiant=saisiUnEtudiant();
            ajouterEtudiant($etudiant);
            break;
        case 3:
            echo "Voir les details d'un étudiant \n";
            break;
        case 4:
            echo "Voir les etudiants d'une classe \n";
            $idClasse=intval(readline("Entre id de la classe: "));
            $etu=getEtudiantsByClasse($idClasse);
            afficheTousLesEtudiants($etu);
            break;
        case 5:
            echo "Quitter \n";
            break;
        default:
            echo "Choix incorrect \n";
            break;
    }
} while ($choix != 5);