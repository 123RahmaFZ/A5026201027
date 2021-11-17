
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

        <input id="nilai">
        <button onclick="rank()">submit</button>

        <p>Nilai Anda</p>
        <p id="peringkat"></p>

        <script>
            function rank() {
                nilai = document.getElementById("nilai").value;
                if (nilai >= 90) {
                    document.getElementById("peringkat").innerHTML = "A";
                } else if (nilai >= 80) {
                    document.getElementById("peringkat").innerHTML = "B";

                } else if (nilai >= 70) {
                    document.getElementById("peringkat").innerHTML = "C";

                } else if (nilai < 70) {
                    document.getElementById ("peringkat").innerHTML = "Anda tidak Lulus";

                }
            }


        </script>
    </body>

    </html>
