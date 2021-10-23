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
        // kết nối với cơ sở dữ liệu
        $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
        // chọn loại kết nối
        mysqli_select_db($link,"dulieu1");
        $sql ="select * from phongban";
        // lấy kết quả từ query
        $result= mysqli_query($link, $sql);
        echo ' <table border ="1" width="100%">';
        echo '<caption> Danh sách phòng ban </caption>';
        echo '<TR>
                    <TH>IDPB</TH>
                    <TH>tên phòng ban</TH>
                    <TH>mô tả</TH>
                    <TH>xem nhân viên</TH>
              </TR>';
        while ($row= mysqli_fetch_array($result))
        {
        echo "<TR align='center'>
                    <TD>$row[IDPB]</TD>
                    <TD>$row[TenPB]</TD>
                    <TD>$row[Mota]</TD>
                    <TD>
                        <a href='form_capNhat.php?IDPB=".$row['IDPB']."' target='T3''>xxx</a>
                    </TD>
              </TR>";
        }
        echo '</table>';
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>