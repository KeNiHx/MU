<?php

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);    
    return $inputText;
}

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags( $inputText);
    $inputText = str_replace(" ", "",  $inputText);  
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}



if(isset($_POST['registerButton'])){
    //Register button was pressed
    //sanitize the user input
    // $username = $_POST['username']; 
    // $username = strip_tags($username);
    // $username = str_replace(" ", "", $username);

    // $firstName = $_POST['firstName'];
    // $firstName = strip_tags( $firstName);
    // $firstName = str_replace(" ", "",  $firstName);  
    // $firstName = ucfirst(strtolower($firstName));

    //Use function instead to clean code duplication
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);    
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    if($wasSuccessful == true){
        header("Location: index.php");
    }
}

?>