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
    $firstName = sanitizeString($_POST['firstName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $passward = sanitizeFormPassword($_POST['password']);
    $passward2 = sanitizeFormPassword($_POST['password2']);

    
}

?>