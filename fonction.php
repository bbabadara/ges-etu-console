<?php
function validerEmail($email){
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if(preg_match($pattern, $email)) {
    return true;
    } else {
    return false;
    }
}
/*
$a = validerEmail("benthiam750@gmail.com");
if($a){
    echo "Valide";
}else{
    echo "Invalide";
}
*/