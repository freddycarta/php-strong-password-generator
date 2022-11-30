<?php
use LDAP\Result;

function generatePassword ($passwordLength) 
{
    $password = '';
    $result = '';
    $alphabet = 'abcdefghijklmnopqrstuvwxy';
    $numbers = '0123456789';
    $symbols = '!"£$%&/()=?^[]{}@#,.-_';

    $fullCharacters = $alphabet . strtoupper($alphabet) . $numbers . $symbols;

    if (empty ($passwordLength)) {
        $result = 'password non valida';
    } else if ($passwordLength < 8 || $passwordLength) {
        $result = ' lunghezza psw tra 8 e 32';
    } else {
        while (strlen($password) < $passwordLength) {
            $index = randomNumber(0, strlen($fullCharacters));
            $char = $fullCharacters[$index];

            $password .= $char;
            
            
        }
        // session_start();
        // $_SESSION['password'] = $password;
        // header('Location: ./success.php');
    }
    return $result;
}

function randomNumber ($min, $max) {
    return rand($min, $max);
}



?>