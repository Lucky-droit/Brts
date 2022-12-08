<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "mainpage.php" method  = "post">
        <label>Source station <label>
            <input type = "text" name = "src"/>
            <br>
            <br>
            <label>Destination station <label>
                <input type = "text" name = "dst"/>
                <br>
                <br>
                <label>Amount</label>

                <input type = "text" name = "amt"/>
                <br>
                <br>
                <input type = "text" name = "tm"/>
                <br>
                <br>
    <input type = "submit" value = "click" name = "click"/>
</form>
    <?php
    if(isset($_POST['click']))
    {
        $src = $_POST['src'];
        $dst = $_POST['dst'];
        $amt = $_POST['amt'];
        $tm = $_POST['tm'];
    }
    ?>
</body>
</html>