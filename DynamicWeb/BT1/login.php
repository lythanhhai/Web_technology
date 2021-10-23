<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<body>
    <?php echo'
        <form name="form1" action="./xuLyLogin.php" method="post">
            <h1>
                Đăng nhập
            </h1>
            <div>
                <label for="username" >
                    Username
                </label>
                <input type="text" name="username"/> 
            </div>
            <br>
            <div>
                <label for="password" >
                    Password
                </label>
                <input type="password" name="password"/> 
            </div>
            <br>
            <input type="submit" name="ok" value="ok"/>
            <input type="reset" name="reset" value="reset"/>
        </form>
        ' ?>
</body>
</html>
