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
        // for($i = 1 ; $i <= sizeof($studentList1); $i++)
        // {
        //     echo "
        //         <p>
        //             ".$i.".<a href=''>".$studentList1[$i]->Name."</a>
        //         </p>
        //       ";
        // }
            for($i = 1 ; $i <= sizeof($studentList1) ; $i++)
            {
                echo "
                    <p>".$i.".<a href='?stid=".$studentList1[$i]->ID."'>".$studentList1[$i]->Name."</a></p>
                ";
            }
    ?>
</body>
</html>