<?php
include("includes/config.php");

// session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
    header("Location: register.php");
}
?>

<html>
<head>
    <title>Welcome to MU's!</title>
</head>
<body>
    Hello
</body>
</html>