


<?php

    session_start();

    $randomPassword = '';


    $passwordLength = intval($_POST['password']);


    $randomPassword = generatePassword($passwordLength);


    function generatePassword($length)
    {
        $items = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $items[rand(0, strlen($items) - 1)];
        }
        return $password;
    } 

    $_SESSION['randomPassword'] = $randomPassword;

    $_SESSION['passwordLength'] = $passwordLength;
?>