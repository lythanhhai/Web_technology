<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<?php
    $guest = $_GET['guest'];
    if($guest === "admin")
    {
        echo '
        <frameset rows="70,*,70">
            <frame name="T1" src="T1.html"></frame>
            <frameset cols="250,*,200">
                <frame name="T2" src="./T8.php"></frame>
                <frame name="T3" src="./1.php"></frame>
                <frame name="T4" src="T4.html"></frame>
            </frameset>
            <frame name="T5" src="T5.html"></frame>
        </frameset>
        ';
    }
    else 
    {
        echo '
        <frameset rows="70,*,70">
            <frame name="T1" src="T1.html"></frame>
            <frameset cols="250,*,200">
                <frame name="T2" src="./T9.php"></frame>
                <frame name="T3" src="./1.php"></frame>
                <frame name="T4" src="T4.html"></frame>
            </frameset>
            <frame name="T5" src="T5.html"></frame>
        </frameset>
        ';
    }
?>
</html>