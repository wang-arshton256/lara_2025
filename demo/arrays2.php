<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Arrays Demo 2 </title>
</head>
<body>
    <?php
    
    $CarBrand = [
        [
            'Brand' => "Toyota",
            'Model' => "Landcruiser",
            'Manufacturing_year' => "2025",
            'Price' => 25000000,
        ],
        [
            'Brand' => "Tesla",
            'Model' => "Cyber truck",
            'Manufacturing_year' => "2023",
            'Price' => 32000000,
        ],
        [
            'Brand' => "Subaru",
            'Model' => "Legacy",
            'Manufacturing_year' => "2018",
            'Price' => 1800000,
        ],
    ];
    ?>

    <h1>Cars Brands Available:</h1>

    <ol>
    <?php foreach ($CarBrand as $carbrand):?>
        
            <li>
                <strong><?=$carbrand['Brand'];?>  </strong>   :       <strong>Model:</strong>     (<?=$carbrand['Model'];?>)      <strong> Manufacturing year:  </strong>         (<?=$carbrand['Manufacturing_year'];?>)     <strong>   Price:  </strong>        (<?=$carbrand['Price'];?>)
            </li>
        
        <?php endforeach;?>
        </ol>
</body>
</html>