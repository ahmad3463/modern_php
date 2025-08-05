<!-- Question => Indexed Array:
Create an array of 5 car brands and print them using a loop. -->

<?php

    $cars = ['Tesla', 'mercedes-benz' , 'hundai','subaru','nissan'];

    // print_r($cars);
    foreach($cars as $car){
        echo $car . '<br>';
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
    // Question no  2 => Associative Array:
    // Store students’ names and marks, then display results like:


    $students = [
        'Ahmad' => 80,
        'Ali' => 70,
        'saad' => 60
    ];

        foreach ($students as $name => $marks) {
            echo "$name marks is  $marks <br>";
        }

        
    echo '<br>';
    echo '<br>';
    echo '<br>';


//     Question no 3    Multi-dimensional Array:
// Create a 2D array of products (name, price, stock) and display them in a table using a loop.

        $products = [
            ['oppo' , 2000 , 'avalible'],
            ['vivo' , 4000 , 'avalible'],
            ['sumsung' , 8000 , 'avalible']
        ];
            
                foreach($products as $product){
                
                echo "$product[0]  price is $product[1] and it's $product[2] in stock <br>";
                
                
                
                }
?>

                <table border="1">
                    <tr>
                        <td>name</td>
                        <td>price</td>
                        <td>stock</td>
                    </tr>

                    <?php foreach($products as $product) :?>
                    <tr>
                        <td><?= $product[0]?></td>
                        <td><?php echo $product[1]?></td>
                        <td><?= $product[2]?></td>
                    </tr>

                    <?php endforeach?>
                </table>