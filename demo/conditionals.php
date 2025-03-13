<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Demo</title>

    <style> 
    body{
    display: grid
;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
    }
    </style>
<body>

</head>
<body>
<?php

$name = "Dark Matter";
$read = true;

//Passing the conditional
if($read) {
    $message = "You have read $name";
}

else{
    $message = "You have Not read $name";
}

?>

 
    <h1>
        <!--Using the php short syntax-->
     <?=$message?>
    </h1>
</body>
</html> 