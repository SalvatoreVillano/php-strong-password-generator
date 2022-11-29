<?php
function randomPassword()
{
    $pswlength = $_POST['pswlength']; //Ci prendiamo la lunghezza della password dal form
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%&/?_-.,#@'; //Lista dei caratteri che comporranno la password
    $alphalength = strlen($alphabet); //Inseriamo la lunghezza dei caratteri sopra dichiarati per utilizzarla nel 'rand'
    $pass = ''; //Dichiariamo pass come stringa vuota
    for ($i = 0; $i < $pswlength; $i++) {
        $n = rand(0, $alphalength); // Delimitiamo il range cosicchè tutti i caratteri possano venir presi in considerazione
        $pass .= $alphabet[$n]; // Creiamo la password e concateniamo il nuovo carattere a ogni giro del ciclo
        session_start();
        $_SESSION['password'] = $pass;
        header('Location: ./success.php');
    }
    return $pass; // Ritorniamo la password
}

?>