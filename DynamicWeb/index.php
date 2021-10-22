<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $check='1';
    
        if($check){ echo 'true'; } else{echo 'false';}

        echo "<br>";

        echo "Hello you";
        echo "<br>";
        $n = 1000;
        $res = 1;
        // C1
        for($i = 1 ; $i < $n ; $i++)
        {
            if($i <= 10)
            {
                if($i % 2 === 0)
                {
                    $res *= $i; 
                }
                else 
                {
                    continue;
                }
            }
            else 
            {
                break;
            }

        }
        echo "ket qua 10!! la = ";
        echo $res;
        echo "<br>";
        $a = Array(1,2,3);
        echo $a[0] ; //in ra giá trị 1
        echo $a[2]; //in ra giá trị 3
        $a[1] = 5;

    ?>
</body>
</html>