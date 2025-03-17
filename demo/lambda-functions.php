<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
    $books= [
        ['name' => 'Do Androids Dream of Electri Sheep',
        'author' => 'Phillip K. Dick',
    'purchaseUrl' => 'http://amazon.com',
    'releaseYear' => 2012
 ],

 ['name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
    'purchaseUrl' => 'http://amazon.com',
    'releaseYear' => 2024
 ],

 ['name' => 'The Martian',
        'author' => 'Phillip K. Dick',
    'purchaseUrl' => 'http://amazon.com',
    'releaseYear' => 1998
 ],
    ];

    $filtererBooks = array_filter($books, function ($book){
        return $book['author'] === 'Andy Weir';
    })
     
    ?>
    

    <ul>
    
    <!--When ever there is need to build complex html fragmets, this syntax below is the best to use-->

    <?php foreach ($filtererBooks as $book):?>
       
        <li>
            <a href="<?=$book['purchaseUrl']?>">
        <?=$book['name']?> (<?=$book['releaseYear']?>) (<?=$book['author']?>)
        </a>
    </li>
   
    <?php endforeach;?>
    </ul>

    
    
</body>
</html>