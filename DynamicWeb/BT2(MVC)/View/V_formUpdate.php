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
        echo "
            <form name='form1' action='../Controller/C_Student.php?update=".$ID1."' method='post'>
                Name: <input name='name' type='text'/>
                <br>
                <br>
                Age: <input name='age' type='text'/>
                <br>
                <br>
                University: <input name='university' type='text'/>
                <br>
                <br>
                <input name='ok' type='submit' value='ok'/>
                <input name='reset' type='reset' value='reset'/>
            </form>
        ";
    ?>
</body>
</html>