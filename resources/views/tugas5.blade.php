<?php
    $registrasi = $_GET["nilai"];
    function nilai($registrasi){
        if ($registrasi >= 90){
            return "Anda mendapatkan nilai A. Anda Lulus";

        }else if ($registrasi >=80){
            return "Anda mendapatkan nilai B. Anda Lulus";

        }else if ($registrasi >=70){
            return "Anda mendapatkan nilai C. Anda Lulus.";

        }else if ($registrasi >=60) {
            return "Kelulusan dipertimbangkan";

            } else{
                return "Anda Tidak Lulus";
        }
    }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color: #1ad1ff;
        }
        h1{
            text-align: center;
            padding: 90px;
            background-color:Tomato;
            margin-right: 100px;
            margin-left: 100px;
            margin-top: 40px;
            margin-bottom: 50px;

        }
    </style>
</head>
<body>
    <h1><?php echo nilai($registrasi)?></h1>
</body>
</html>
