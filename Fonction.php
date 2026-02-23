<?php

function validerNumeroSenegal($numero)
{
    $pattern = '/^(70|75|76|77|78)[0-9]{7}$/';
    if (preg_match($pattern, $numero)) {
        return true;   
    } else {
        return false; 
    }
}

?>