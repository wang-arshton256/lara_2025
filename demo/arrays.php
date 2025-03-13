<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
    $Books = [
        "Do Androids Dream of Electri Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
    
    ?>

    <ul>
    
    <!--When ever there is need to build complex html fragmets, this syntax below is the best to use-->
    <?php foreach ($Books as $book):?>
        <li><?=$book?> </li>
    <?php endforeach;?>
    </ul>
</body>
</html>