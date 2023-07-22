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
          'releaseYear'=>'1989',
          'purchaseUrl'=>'https://example.com'

    ],

        ['name'=>'Project hail Mary',
        'author'=>'Andy Weir',
        'releaseYear'=>'1988',
        'purchaseUrl'=>'https://example.com'

],
[ 'name'=>'The Martian',
'author'=>'Andy Weir',
'releaseYear'=>'2011',
'purchaseUrl'=>'https://example.com'


]




    ];

  function filter($items,$fn){
    $filteredItems=[];// null array 

    foreach($items as $item){
        if($fn($item)){ // item asin books 
            $filteredItems[]=$item;// new list of array 
        }
        
    }
    return $filteredItems; // returns empty array 


  }
  $filteredBooks=array_filter($books,function($book) { // function call 
     return $book['author']==='Andy Weir'; // return books releaseYear 
  });
    
    
    ?>
    <ul>
    
        <?php foreach($filteredBooks as $book) : ?>
           
            <li>
               <a href=<?php echo $book['purchaseUrl']; ?> >
               <?php echo  $book['name'] ; ?> (<?php echo $book['releaseYear']; ?>)-by <?php echo $book['author'];?> 
               </a>
        </li>
        
        <?php endforeach; ?>

    </ul>
    
</body>
</html>