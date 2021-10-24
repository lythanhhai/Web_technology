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
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $guest = "guest";
        // nếu là khách
        if(isset($_POST["guest"]))
        {
            $guest = "guest";
            header("Location: index1.php?guest=".$guest);
        }
        else 
        {
            //if($guest !== "")
            if($username == "" || $password == "") { header("Location:login.php");}
            else 
            {
                // kết nối với cơ sở dữ liệu
                $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
                // chọn loại kết nối
                mysqli_select_db($link,"dulieu1");
                $sql ="select * from admin where Username='$username' and Password='$password'";
                
                // lấy kết quả từ query
                $result= mysqli_query($link, $sql);
                if(mysqli_num_rows($result) == 0) { header("Location:login.php");}
                else 
                {
                    $guest = "admin";
                    header("Location: index1.php?guest=".$guest);
                }
                
                mysqli_free_result($result);
                mysqli_close($link);
            }

        }
    ?>
        
</body>
</html>