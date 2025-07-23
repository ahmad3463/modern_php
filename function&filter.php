<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $items = [
        [
            "name" => "The Subtle Art of not giving a F**k",
            "author" => "willim son",
            "releaseYear" => 2001
        ],
        [
            "name" => "The Art Of Laziness",
            "author" => "willim son",
            "releaseYear" => 1884
        ],
        [
            "name" => "Dopamine Nation",
            "author" => "Anna Lembky",
            "releaseYear" => 1883
        ]
        ];

              function filter($items ,$fn){
                $filteredItems = [];

                foreach($items as $item){
                    if($fn($item)){
                        $filteredItems[] = $item;
                    }

                }
                return  $filteredItems;
            }

            $filterByAuthor = filter($items , function($book){
                return $book['releaseYear'] <= 2000;
            } );
        
        ?>

    <ul>
        <?php foreach ($filterByAuthor  as $book): ?>
                <?php if($book['author'] === 'willim son') : ?>
            <li>
                <?= $book['name'] ?> (<?= $book['releaseYear']?>)
            </li>

        <?php endif ?>
        <?php endforeach ?>


          </ul>

</body>

</html>