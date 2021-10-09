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
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        
        // // Create connection
        // $conn = new mysqli($servername, $username, $password);
        
        // // Check connection
        // if ($conn->connect_error) {
        //   die("Connection failed: " . $conn->connect_error);
        // }
        // echo "Connected successfully";

        // $link = new mysqli("localhost", "root", "", "DULIEU");
        // //lựa chọn cơ sở dữ liệu
        // mysqli_select_db( $link, "DULIEU");
        // $sql = "select * from table1";
        // $result = mysqli_query($link, $sql);
        
        // echo '<table border="1" width="100%"></table>';
        // echo '<caption>Du lieu truy xuat</caption>';
        // echo '<>'

        $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
        mysqli_select_db($link,"dulieu");
        $sql ="select * from table1";
        $result= mysqli_query($link, $sql);
        echo ' <table border ="1" width="100%">';
        echo '<caption> du lieu truy cap </caption>';
        echo '<TR><TH>MA SO</TH><TH>HO TEN</TH><TH>NAM SINH</TH><TH>NGHE NGHIEP</TH></TR>';
        while ($row= mysqli_fetch_array($result)) {
        echo "<TR><TD>$row[Maso]</TD><TD>$row[Hoten]</TD><TD>$row[Ngaysinh]</TD><TD>$row[nghenghiep]</TD></TR>";
        }
        echo '</table>';
        mysqli_free_result($result);
        mysqli_close($link);
        
    ?>
</body>
</html>