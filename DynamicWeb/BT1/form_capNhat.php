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
        $IDPB = $_REQUEST['IDPB'];
        echo '
            <form name="form1" action="./xuLyForm_capNhat.php" method="post">
                <h1>
                    xử lý cập nhật
                </h1>
                <div>
                    <label for="IDPB" >
                        mã phòng ban
                    </label>
                    <input type="text" name="IDPB" value="'.$IDPB.'" readonly/> 
                </div>
                <br>
                <div>
                    <label for="tenPB" >
                        tên phòng ban
                    </label>
                    <input type="text" name="tenPB"/> 
                </div>
                <br>
                <div>
                    <label for="mota" >
                        mô tả
                    </label>
                    <input type="text" name="mota"/> 
                </div>
                <br>
                <input type="submit" name="ok" value="ok"/>
                <input type="reset" name="reset" value="reset"/>
            </form>
        '
    ?>
</body>
</html>