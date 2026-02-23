
    <?php
function validerNom($nom) {
    $nom = trim($nom);

    if (strlen($nom) < 2) {
        return "Le nom doit contenir au moins 2 caractères.";
    }

    
    if (!preg_match("/^[a-zA-Z]+$/", $nom)) {
        return "Le nom ne doit contenir que des lettres.";
    }

    return true; 
}
?>