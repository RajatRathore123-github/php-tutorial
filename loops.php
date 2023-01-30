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

    $index = 1;
    while($index <= 10){
        echo "$index <br>";
        $index++;
    }
    $arr = array(1,2,3,4,5,6);
    for($i = 0; $i < count($arr); $i++){
        echo "$arr[$i] <br>";
    }
    ?>
</body>
</html>