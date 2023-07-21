<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>

       body{
        display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
    color:red;

       }
    </style>
    </head>
<body>
    <?php 
    $name="dark Matter";
    $read =true;
    
    ?>
    <h1>
        <?php 
        
        if($read){
            $message="you have read "."" .$name;

        }else
        $message="you havent read".$name;
        echo $message;
        ?>

        
        
    </h1>
    
</body>
</html>