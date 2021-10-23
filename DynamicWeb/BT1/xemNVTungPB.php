<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onClick="trove()">Trở về</button>
    <script language="javascript">
            function trove()
            {
                  
            }
    </script>
    <?php 
        $IDPB = $_REQUEST['IDPB'];
        // kết nối với cơ sở dữ liệu
        $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
        // chọn loại kết nối
        mysqli_select_db($link,"dulieu1");
        $sqlPB ="select * from phongban";
        $sqlNV ="select * from nhanvien";
        
        // lấy kết quả từ query
        $resultPB= mysqli_query($link, $sqlPB);
        $resultNV= mysqli_query($link, $sqlNV);
        //echo $IDPB;
        echo ' <table border ="1" width="100%">';
        echo '<caption> Danh sách nhân viên </caption>';
        echo '<TR>
                    <TH>IDNV</TH>
                    <TH>HOTEN</TH>
                    <TH>IDPB</TH>
                    <TH>Diachi</TH>
              </TR>';
              while($row= mysqli_fetch_array($resultNV))
              {
                  if($row["IDPB"] == $IDPB)
                  {
                      echo "<TR align='center'>
                              <TD>$row[IDNV]</TD>
                              <TD>$row[Hoten]</TD>
                              <TD>$row[IDPB]</TD>
                              <TD>$row[Diachi]</TD>
                           </TR>";
                  }
              }
        mysqli_free_result($resultNV);
        mysqli_close($link);
    ?>
</body>
</html>