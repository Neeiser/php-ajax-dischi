<?php
    include __DIR__ . '/components/api/api.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="./components/style/style.css">
</head>
<body>
    <header>
        <div>
            <img src="./components/style/img/spotify-logo.png" alt="">
        </div>
    </header>
    <main>

    
    <?php foreach($arr_dischi as $disco) { ?>
        <p><?php $disco['title'] ?></p>
    <?php } ?>
    
    </main>
</body>
</html>