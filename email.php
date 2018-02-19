<?php
$name = $_POST["firstName"] + " " + $_POST['lastName'];
$name += " (" + $_POST['email'] + ")"; 
$msg= "Wiadomość od: " + $name; 

$msg += "\r\n";
$msg += $_POST['message'];

mail("drew-mix@wp.pl", "Wiadomość ze strony " + $name, $msg);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noclegi Skawina email</title>
</head>
<body>
   <h2>Twoja wiadomość została wysłana</h2>
   <a href="index.html"><button>Strona Główna</button></a>
    
</body>
</html>