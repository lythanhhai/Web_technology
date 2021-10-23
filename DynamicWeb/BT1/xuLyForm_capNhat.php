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
        $tenPB = $_REQUEST['tenPB'];
        $mota = $_REQUEST['mota'];
        echo $IDPB;
        echo $_REQUEST['tenPB'];
        echo $mota;
        $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
        // chọn loại kết nối
        mysqli_select_db($link,"dulieu1");
        $sql ="update phongban set TenPB='$tenPB' where IDPB='$IDPB'";
        // lấy kết quả từ query
        $result= mysqli_query($link, $sql);
        $sql1 ="update phongban set Mota='$mota' where IDPB='$IDPB'";
        // lấy kết quả từ query
        $result1= mysqli_query($link, $sql1);
        header("Location:capNhat.php");
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>