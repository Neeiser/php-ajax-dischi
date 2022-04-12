<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <div>
            <img src="./components/style/img/spotify-logo.png" alt="">
        </div>
    </header>

    <?php
        include __DIR__ . '/components/api/api.php';
        echo $arrdischi;
    ?>
</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
header{
background-color: lightblue;
}
img{
    height: 50px;
    width: 50px;
}
</style>