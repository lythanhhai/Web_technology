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
    echo '
            <form name="form1" >
                <h1>
                    Tìm kiếm
                </h1>
                <div>
                    <label for="username" >
                        ID
                    </label>
                    <input type="text" name="username"/> 
                </div>
                <br>
                <div>
                    <label for="password" >
                        Tên
                    </label>
                    <input type="password" name="password"/> 
                </div>
                <br>
                <button>
                    <a href="./timKiemNV.php">
                     Tìm kiếm
                    </a>
                </button>
                <input type="reset" name="reset" value="reset"/>
            </form>'
        ?>
</body>
</html>