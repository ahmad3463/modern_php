<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $books = [
        [
            "name" => "The Subtle Art of not giving a F**k",
            "author" => "willim son",
            "releaseYear" => "2001"
        ],
        [
            "name" => "The Art Of Laziness",
            "author" => "willim son",
            "releaseYear" => "1884"
        ],
        [
            "name" => "Dopamine Nation",
            "author" => "Anna Lembky",
            "releaseYear" => "198"
        ]
    ]
    
    ?>

    <ul>
        <?php foreach($books as $book) :?>
            
        <li><?= $book['author']?></li>

        <?php endforeach?>
    </ul>
    
</body>
</html>