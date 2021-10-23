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
                $Hoten = $_REQUEST['Hoten'];
                $IDPB = $_REQUEST['IDPB'];
                $Diachi = $_REQUEST['Diachi'];
                //echo $luachon;
                echo $IDNV;
                if($IDNV == "" || $Hoten == "" || $IDPB == "" || $Diachi == "") { header("Location:chen.php");}
                else 
                {
                    // kết nối với cơ sở dữ liệu
                    $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
                    // chọn loại kết nối
                    mysqli_select_db($link,"dulieu1");
                    // $sqlSelect = "select * from nhanvien";
                    // $resultSe = mysqli_query($link, $sqlSelect);
                    // while($row = mysqli_fetch_array($resultSe))
                    // {
                    //     echo '$row[IDNV]';
                    //     if($row['IDNV'] == $IDNV)
                    //     {
                            
                    //         header("Location:chen.php");
                    //     }
                    // }
                    $sqlChen ="insert into nhanvien values('$IDNV', '$Hoten', '$IDPB', '$Diachi')";

                    $result = mysqli_query($link, $sqlChen);

                    header("Location: ./xemTTNhanVien.php");
                    mysqli_free_result($result);
                    mysqli_close($link);
                }
        
        ?>
</body>
</html>