<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Danh sách sinh viên</h2>
        <?php 
            for($i = 1 ; $i <= sizeof($studentList) ; $i++)
            {
                echo "
                    <p>".$i.".<a href='?stid=".$studentList[$i]->ID."'>".$studentList[$i]->Name."</a>
                    
                    </p>
                ";
                echo "
                    <button><a href='?removeID=".$studentList[$i]->ID."'>Xóa</a></button>
                ";
                ;
            }
        ?>
</body>
</html>