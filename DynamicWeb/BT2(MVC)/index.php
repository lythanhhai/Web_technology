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
        $a = "1";
        echo "
            <h1>Trang chủ</h1>
            <h5>1. <a href='./Controller/C_Student.php'>Xem thông tin</a></h5>
            <h5>2. <a href='./Controller/C_Student.php?mod1=1'>Thêm sinh viên</a></h5>
            <h5>3. <a href='./Controller/C_Student.php?mod2=2'>sửa sinh viên</a></h5>
            <h5>4. <a href='./Controller/C_Student.php?mod3=3'>Xóa sinh viên</a></h5>
            <h5>5. <a href='./Controller/C_Student.php?mod4=4'>Tìm kiến sinh viên</a></h5>
        ";
    ?>
</body>
</html>