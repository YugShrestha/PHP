<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<style>
    h1{
        
        display: grid;
    text-align: center;

    }
 </style>

<body>
    <h1>Recomended Books</h1>
    <?php 
    $books=[
        ['name'=>'Do android dream of electric sheep',
          'author'=> 'Phillip k .Dick',
          'purchaseUrl'=>'https://example.com'

    ],

        ['name'=>'project hail Mary',
        'author'=>'Andy weir',
        'purchaseUrl'=>'https://example.com'

        ]




    ];


    
    
    ?>
    <ul>
        <?php foreach($books as $book) : ?>
            <li>
               <a href=<?php echo $book["purchaseUrl"]; ?> >
               <?php echo  $book['name'] ;?>
                 </a>
        </li>
        
        <?php endforeach; ?>

    </ul>
    
</body>
</html>