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
         $IDNV = $_REQUEST['IDNV'];
         echo $IDNV;
         $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
         // chọn loại kết nối
         mysqli_select_db($link,"dulieu1");
         $sql = "delete from nhanvien where IDNV='$IDNV'";
         // lấy kết quả từ query
         $result= mysqli_query($link, $sql);
         header("Location: xoaNV.php");
         //mysqli_free_result($result);
         mysqli_close($link);
    ?>
</body>
</html>