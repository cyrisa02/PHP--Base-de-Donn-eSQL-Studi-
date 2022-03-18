<?php

function isSocialNumberValid(string $number): bool
{
    // On vérifie le format
    if (!preg_match('/[12][0-9]{2}(0[1-9]|1[0-2])[0-9]{10}/', $number)) {
        return false;
    }

    // On vérifie la clef de contrôle
    $firstNumbers = (int) substr($number, 0, -2);
    $controlKey = (int) substr($number, -2);

    return (97 - ($firstNumbers % 97)) === $controlKey;
}

var_dump(isSocialNumberValid('369054958815780')); // false
var_dump(isSocialNumberValid('269134958815780')); // false
var_dump(isSocialNumberValid('26914958815780')); // false
var_dump(isSocialNumberValid('269054958815781')); // false
var_dump(isSocialNumberValid('269054958815780')); // true

//Vous êtes chargé d'implémenter la saisie d'un numéro de sécurité sociale sur une application. Voici la composition d'un numéro de sécurité sociale, et donc les vérifications à effectuer :

    //Le premier chiffre désigne le sexe d'une personne : il ne peut être qu'égal à 1 ou 2

   //Les deux chiffres qui suivent représentent l'année de naissance, qui peut être comprise entre 00 et 99

   // Les deux chiffres qui suivent représentent le mois de naissance, donc compris entre 01 et 12

    //Les 5 chiffres qui suivent diffèrent selon si la personne est née en France, en Outre-mer ou à l'étranger (pour simplifier cet exercice, nous allons simplement vérifier qu'il n'y a que des chiffres)

    //Les trois chiffres suivants sont le numéro de naissance, entre 000 et 999

    //Enfin, les deux derniers chiffres représentent une clé de contrôle permettant de repérer les fautes de frappe. Ils sont calculés grâce à l'opération : 97 - (13 premiers chiffres modulo 97)

//Codez une fonction PHP permettant de vérifier si un numéro de sécurité sociale est valide ou non.
