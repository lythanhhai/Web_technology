<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    "'.$row.'"
    // kiểm tra xem nút nào được bấm
    if(isset($_POST["Submit1"]))
{
$sum=$_POST["str1"] + $_POST["str2"];
echo "The sum = ". $sum;

}
</body>
</html>