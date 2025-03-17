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

    function filterByAuthor($books, $author){
         $filteredBooks = [];
         foreach ($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
         }
         return $filteredBooks;
    }
     
    ?>
    

    <ul>
    
    <!--When ever there is need to build complex html fragmets, this syntax below is the best to use-->

    <?php foreach (filterByAuthor ($books, 'Phillip K. Dick') as $book):?>
       
        <li>
            <a href="<?=$book['purchaseUrl']?>">
        <?=$book['name']?> (<?=$book['releaseYear']?>) (<?=$book['author']?>)
        </a>
    </li>
   
    <?php endforeach;?>
    </ul>

    
    
</body>
</html>