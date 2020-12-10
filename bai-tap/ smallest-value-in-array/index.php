<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="submit">
</form>
</body>
</html>
<?php
function findMin($arr)
{
    $index = 0;
    $min = $arr[0];
    foreach ($arr as $key => $value) {
        if ($min > $value) {
            $index = $key;
            $min = $value;
        }
    }
    return "Index of min: " . $index;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $array = [569,34,555652, 2, 3, 4, 4, 6, 7, 8, 32, 89, 1, 4, 755, 6, 55, 4, 43];
    echo findMin($array);
}
