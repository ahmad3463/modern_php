<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start php day-1</title>
</head>
<body>

    <h1>Recommaded subjects </h1>
    <?php
    
    
    $subjects = [
        "computer science",
        "software engnieerning",
        "Data science"
        ]
    ?>

<ul>
    <?php
    // foreach ($subjects as  $subject) {
    // //    echo "<li> helo world </li>";

    //    echo "<li> $subject  </li>";

    // }

    ?>
    </ul>
    <ul>
    <?php foreach ($subjects as $subject) : ?>

            <li><?= $subject ?></li>

        <?php endforeach ?>

</ul>
</body>
</html>