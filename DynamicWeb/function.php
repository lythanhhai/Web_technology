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
        $b="xin chao cac ban than men";
        $vitri=strpos($b,“chao");
        echo “vi tri la: “.$vitri.<br>";
        function test($a=1)
        {
            echo "la $a";
        }
        test(1234);// truy cập biến toàn cục dùng global

        $a = 1; //biến toàn cục

        //hàm do tự tạo
        function test1()
        { //từ khoá global báo cho php biết là bên test
        //bây giờ ta sẽ dùng biến toàn cục
        global $a;
        echo $a; //in ra giá trị: 1
        } //end test


        $a = 1; //biến toàn cục
        //hàm do tự tạo
        function test2()
        { echo $GLOBALS['a']; //in ra giá trị: 1
        } //end test

        //$_POST
        //$_REQUEST
        
        

        $a="xin chao cac ban than men";

        echo strstr($a,"c")."<br>";
  
    ?>
</body>
</html>