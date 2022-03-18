<?php

// ... Processus de connexion et de deduction des rôles

if (!in_array('ROLE_MANAGER', $user->getRoles())) {
    throw new Exception('Vous n\'avez pas le droit d\'acceder à cette fonctionnalité');
}

// voir 40roleclassUser.php
//faire avec un try catch Exception

