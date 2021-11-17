<html>

<head>
    <title>
        Hasil
    </title>
    <style>
        body{
            background: url('https://th.bing.com/th/id/OIP.U2bWyvY2jQLoiN7ZVIfhkAHaE8?pid=ImgDet&rs=1');
            text-align: center;
        }
        h2{
            text-decoration: aliceblue;
            color: azure;
        }
        p {
            color: azure;
        }
    </style>

</head>


<body>
    <h2>Periksa nilai anda disini</h2>

    <form action="datang" method="GET">
        <input type="text" name="nilai">
        <input type="submit" name="Kirim">
    </form>


    <p>Nilai Anda</p>

    <?php
    if(isset($_GET["nilai"])){
        $nilai = $_GET["nilai"];
        if ($nilai >= 90){
            echo "A";

        }else if ($nilai >=80){
            echo "B";

        }else if ($nilai >=70){
            echo "C";

        }else if ($nilai <70) {
            echo "Anda Tidak Lulus";
        }
    }

        ?>
</body>

</html>
