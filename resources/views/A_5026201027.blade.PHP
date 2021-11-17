
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            align-content: center;

        }

        h2 {
            margin-top: 25px;
            font-size: 60px;
            text-align: center;
        }
        select {
            width: 100%;
        }
    </style>
</head>

<body>
    <div>
        <h5>Nama Mahasiswa: Rahma Fauzia</h5>
        <h5>Nama Panggilan: Rahma</h5>
        <h5>NRP: 5026201027</h5>
    </div>
    <div class="container">
        <h2>Form Pendaftaran Kuota Internet</h2>
        <form action="/action_page.php">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input style=" width: 100%;" type="text" id="name" placeholder="cuma nama panggilan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="NRP" class="col-sm-2 col-form-label">NRP Mahasiswa</label>
                <div class="col-sm-10">
                    <input style=" width: 100%;" type="text" id="nrp" placeholder="enter address">
                </div>
            </div>
            <div class="row mb-3">
                <label for="course" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select style="width: 100%;" id="jurusan">
                        <option selected disabled></option>
                        <option value="true">Sistem Informasi</option>
                        <option value="true">Elektro</option>
                        <option value="true">Informatika</option>
                    </select>
                    <script>
                        function myFunction() {
                            var result = document.getElementById("jurusan").value;
                            alert(result);
                        }
                    </script>
                </div>
            </div>

            <div class="row mb-3">
                <label for="NRP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input style=" width: 100%;" type="text" id="nomor" placeholder="enter address">
                </div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-3 offset-2">
                    <button type="submit" class="btn btn-primary my-4 form-control" id="kirim">Kirim</button>
                </div>
                <div class="col-3 offset-2 ">
                    <button type="reset" class="btn btn-success my-4 form-control" id="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
           $("#submit").click(function () {
               var name = $("#name").val();
               var nrp = $("#nrp").val();
               var jurusan = $("#jurusan").val();
               var nomor = $("#nomor").val();


               if (name.length == "") {
                   alert("Masukkan nama");
                   return false;
               } else {
                   var pattern = /^[a-zA-Z ]{2,}+$/;
                   if (!pattern.test(name)) {
                       alert("Jangan 1 huruf yaa");
                       return false;
                   }
               }

               if (nrp.length == "") {
                   alert("123456");
                   return false;
               } else {
                   var pattern_nrp = /^\d{10}$/;
                   if (!pattern_nrp.test(nrp)) {
                       alert("NRP 10 Karakter gaes");
                       return false;
                   }
               }
               if (jurusan.length == "") {
                   alert("pilih yang lain ");
                   return false;
               } return true;

               if (nomor.length == "") {
                   alert("Please enter your number phone");
                   return false;
               } else {
                   var pattern_nomor = /^\d{7,}$/;
                   if (!pattern_nomor.test(nomor)) {
                       alert("yang bener");
                       return false;
                   }
               }

           });
       });
   </script>
</body>

</html>
