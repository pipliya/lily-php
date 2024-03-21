<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = false;
    $books = [
        [
            'name' => "Create and Lead",
            'url' => "https://www.cricket.com"
        ],
        [
            'name' => "Free Fall",
            'url' => "https://www.freefall.com"
        ]
    ];

    if($read){
        $message = "You have read $name";
    } else{
        $message = "You have not read $name";
    }
    ?>

    <ul>
        <?php foreach($books as $book) : ?>
            <li>
                <a href="<?= $book['url']?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <h1>
        <?php
         echo $message
        ?>
    </h1>
</body>

</html>