<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <form name="form1" action="./xuLyTimKiem.php" method="post">
                <h1>
                    Tìm kiếm
                </h1>
                <div>
                    <label for="username" >
                        ID
                    </label>
                    <input type="text" name="txtId"/> 
                </div>
                <br>
                <div>
                    <label for="password" >
                        Tên
                    </label>
                    <input type="text" name="txtName"/> 
                </div>
                <br>
                <input type="submit" value="timkiem" />
                <input type="reset" name="reset" value="reset"/>
            </form>
</body>
</html>