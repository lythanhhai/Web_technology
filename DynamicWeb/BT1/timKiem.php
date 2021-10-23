<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <form name="form1" action="./timKiemByProper.php" method="post">
                <h1>
                    Tìm kiếm
                </h1>
                <div>
                    <label for="username" >
                        chọn thuộc tính muốn tìm
                    </label>
                    <select name="chon">
                        <option>
                            IDNV
                        </option>
                        <option>
                            Hoten
                        </option>
                        <option>
                            IDPB
                        </option>
                        <option>
                            Diachi
                        </option>
                    </select>
                </div>
                <br>
                <label for="noidung">
                        Nội dung tìm
                    </label>
                    <input name="noidung"type="text"/>
                <br>
                <br>
                <input type="submit" value="timkiem" />
                <input type="reset" name="reset" value="reset"/>
            </form>
</body>
</html>