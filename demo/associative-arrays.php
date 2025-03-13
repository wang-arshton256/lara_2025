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
        ['name' => 'Do Androids Dream of Electri Sheep',
        'author' => 'Phillip K. Dick',
    'purchaseUrl' => 'http://amazon.com'
 ],

 ['name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
    'purchaseUrl' => 'http://amazon.com'
 ],

 ['name' => 'Do Androids Dream of Electri Sheep',
        'author' => 'Phillip K. Dick',
    'purchaseUrl' => 'http://amazon.com'
 ],
    ];
    
    ?>

    <ul>
    
    <!--When ever there is need to build complex html fragmets, this syntax below is the best to use-->
    <?php foreach ($Books as $book):?>
        <li>
            <a href="<?=$book['purchaseUrl']?>">
        <?=$book['name'];?> 
        </a>
    </li>
    <?php endforeach;?>
    </ul>
</body>
</html>