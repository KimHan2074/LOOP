<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i=0;
        $sum=0;
        $sum_chan=0;
        $sum_le=0;
        while($i<10){
            echo $i."<br>";
            $sum=$sum+$i;
            if($i%2==0){
                $sum_chan=$sum_chan+$i;
            }
            else{
                $sum_le=$sum_le+$i;
            }
            $i++;
        }
        echo "Tổng tất cả các số: ".$sum."<br>";
        echo "Tổng tất cả các số chẵn: ".$sum_chan."<br>";
        echo "Tổng tất cả các số lẻ: ".$sum_le."<br>";
    ?>
</body>
</html>