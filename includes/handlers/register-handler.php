<?php

/*--- Sanitize functions ---*/
function sanitizeFromPassword($input)
{
    $input = strip_tags($input);
    return $input;
}

function sanitizeFromUser($input)
{
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    return $input;
}

function sanitizeFromString($input)
{
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = ucfirst(strtolower($input));
    return $input;
}

/*--- Check if sign up button submitted ----*/
if(isset($_POST['registerButton'])) {
    // Get user inputs
    $username = sanitizeFromUser($_POST['username']);
    $firstName = sanitizeFromString($_POST['firstName']);
    $lastName = sanitizeFromString($_POST['lastName']);
    $email = sanitizeFromString($_POST['email']);
    $email2= sanitizeFromString($_POST['email2']);
    $password = sanitizeFromPassword($_POST['password']);
    $password2 = sanitizeFromPassword($_POST['password2']);

    // Call register method from Account class
    $wasSuccess = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($wasSuccess) {
        $_SESSION['userLoggedIn'] = $username;
        header('Location: index.php');
    }

}

