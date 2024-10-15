<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square{
        width: 40px;
        height: 40px;
        background-color: yellow;
        border: 1px solid black;
        margin-bottom: 10px;
    }
</style>
<body>
    <?php
        for($i=0; $i<6; $i++){
            echo "<div class='square'></div>";
        }
    ?>
</body>
</html>