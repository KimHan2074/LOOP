<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sum=0;
        $sum_chan=0;
        $sum_le=0;
        for($i=0; $i<=5; $i++){
            echo $i.' '."<br>";
            $sum=$sum+$i;
            if($i%2==0){
                $sum_chan=$sum_chan+$i;
            }
            else{
                $sum_le=$sum_le+$i;
            }
        }
        echo "Tổng các số từ 0-5: ".$sum."<br>";
        echo "Tổng các số chẵn từ 0-5: ".$sum_chan."<br>";
        echo "Tổng các số lẻ từ 0-5: ".$sum_le."<br>";
    ?>
</body>
</html>