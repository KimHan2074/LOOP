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
        background-color: brown;
        display: inline-block;
        margin:10px;
    }
</style>
<body>
    <?php
        for($i=0; $i<5; $i++){
            for($j=0; $j<10; $j++){
                echo "<div class='square'></div>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>