<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <h1>Recomended Books</h1>
    <?php 
    $books=["Do android dream of electric sheep",
    "The langoliers",
    "hail mary"

    ];

    foreach($books as $book);
    
    ?>
    <ul>
        
    <?php  foreach($books as $book):
    ?>
    <?php echo "<li> $book</li>"?>
    <?php endforeach; ?>
    
    
    </ul>
    
</body>
</html>