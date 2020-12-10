<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edgje">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Register</legend>
        <input type="text" name="name" placeholder="nhap name">
        <input type="email" name="email" placeholder="nhap email">
        <input type="number" name="phone" placeholder="nhap so dien thoai">
        <button type="submit">submit</button>
    </fieldset>

</form>
</body>
</html>
<?php

function saveDataJSON($data){
    $contact = json_encode($data);
    file_put_contents('data.json' , $contact);
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $arr = [$name,$email,$phone];
    saveDataJSON($arr);
}