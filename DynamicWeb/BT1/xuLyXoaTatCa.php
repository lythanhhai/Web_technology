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
      if(count($_POST['IDNVArray']) > 0)
      {
        $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
        mysqli_select_db($link,"dulieu1");
        foreach($_POST['IDNVArray'] as $IDNV)
        {
            $sqlXoa ="delete from nhanvien where IDNV='$IDNV'";
            $result = mysqli_query($link, $sqlXoa);
        }
        header("Location: ./xoaTatCaNV.php");
      }
      header("Location: ./xoaTatCaNV.php");
    ?>
</body>
</html>