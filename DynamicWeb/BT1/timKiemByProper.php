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
        $luachon = $_REQUEST['chon'];
        if($maNV == "" || $nameNV == "") { header("Location:timkiemNV.php");}
        else 
        {
            // kết nối với cơ sở dữ liệu
            $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
            // chọn loại kết nối
            mysqli_select_db($link,"dulieu1");
            $sql ="select * from nhanvien where IDNV='$maNV' and Hoten='$nameNV'";
            
            // lấy kết quả từ query
            $result= mysqli_query($link, $sql);
            if(mysqli_num_rows($result) == 0) { header("Location:timkiemNV.php");}
            else 
            {
                echo ' <table border ="1" width="100%">';
                echo '<caption> Du lieu bang nhan vien</caption>';
                echo '<TR>
                            <TH>IDNV</TH>
                            <TH>Hoten</TH>
                            <TH>Maphongban</TH>
                            <TH>diachi</TH>
                    </TR>';
                while ($row= mysqli_fetch_array($result))
                {
                echo "<TR align='center'>
                            <TD>$row[IDNV]</TD>
                            <TD>$row[Hoten]</TD>
                            <TD>$row[IDPB]</TD>
                            <TD>$row[Diachi]</TD>
                    </TR>";
                }
                echo '</table>';
            }
            
            mysqli_free_result($result);
            mysqli_close($link);
        }
        
    ?>
</body>
</html>