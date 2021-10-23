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
            echo '
                <form name="form1" action="" method="post">
                    <label for="IDNV">mã nhân viên</label>
                    <input name="IDNV" type="text"/>
                    <br>
                    <label for="Hoten">Họ tên</label>
                    <input name="Hoten" type="text"/>
                    <br>
                    <label for="IDPB">mã phòng ban</label>
                    <input name="IDPB" type="text"/>
                    <br>
                    <label for="Diachi">Dia chi</label>
                    <input name="Diachi" type="text"/>
                    <br>
                </form>
            ';
        
        ?>
</body>
</html>