
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum Dua</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            align-content: center;
            background-color: rgb(152, 248, 255);
        }
        .container{
            width: 40%;
        }

        select {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input style="background-color:rgb(204, 197, 200); width: 100%;" type="text" id="name"
                    placeholder="cuma nama panggilan">
            </div>
            <div class="form-group">
                <label for="Address">Address:</label>
                <input style="background-color:rgb(204, 197, 200); width: 100%;" type="text" id="address"
                    placeholder="enter address">
            </div>
            <div class="form-group">
                <label for="code">Zip Code:</label>
                <input style="background-color:rgb(204, 197, 200);width: 100%;" type="text" id="zip"
                    placeholder="6 digit angka">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input style="background-color:rgb(204, 197, 200);width: 100%;" type="email" id="email"
                    placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input style="background-color:rgb(204, 197, 200);width: 100%;" type="password" id="pwd"
                    placeholder="kombinasi minima 1 huruf dan angka">
            </div>
            <div class="form-group">
                <label for="Telephone">Telephone:</label>
                <input style="background-color:rgb(204, 197, 200);width: 100%;" type="Telephone" id="telephone"
                    placeholder="0896-1234-5674">
            </div>

            <div class="form-group">
                <label for="course">Select Your Course</label>
                <br>
                <select style="background-color:rgb(204, 197, 200);" style="width: 100%;" id="mySelect">
                    <option selected disabled></option>
                    <option value="true">BTECH</option>
                    <option value="">BBA</option>
                    <option value="true">BCA</option>
                    <option value="true">B.COM</option>
                    <option value="true">GEEKFORGEEKS</option>
                </select>
                <script>
                    function myFunction() {
                        var result = document.getElementById("mySelect").value;
                        alert(result);
                    }
                </script>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <input type="submit" value="submit" id="submit">

            <input type="reset" value="Reset">
        </form>

    </div>

    <script>
        $(document).ready(function () {
            $("#submit").click(function () {
                var name = $("#name").val();
                var address = $("#address").val();
                var zip = $("#zip").val();
                var email = $("#email").val();
                var pwd = $("#pwd").val();
                var telephone = $("#telephone").val();
                var mySelect = $("#mySelect").val();

                if (name.length == "") {
                    alert("Please enter your name");
                    return false;
                } else {
                    var pattern = /^[a-zA-Z ]+$/;
                    if (!pattern.test(name)) {
                        alert("Invalid name");
                        return false;
                    }
                }

                if (address.length == "") {
                    alert("enter address");
                    return false;
                }
                if (zip.length == "") {
                    alert("123456");
                    return false;
                } else {
                    var pattern_zip = /^\d{6}$/;
                    if (!pattern_zip.test(zip)) {
                        alert("must be number and containt 6 characters");
                        return false;
                    }
                }
                if (email.length == "") {
                    alert("Please enter your email");
                    return false;
                } else {
                    if (email.indexOf("@") < 0) {
                        alert("Please enter a valid email ");
                        return false;
                    }
                }
                if (pwd.length == "") {
                    alert("Please enter your password");
                    return false;
                } else {
                    if (!(pwd.length >= 6 && pwd.length <= 16)) {
                        alert("must be containt 8-16 characters");
                        return false;
                    }
                }
                if (telephone.length == "") {
                    alert("Please enter your number phone");
                    return false;
                } else {
                    var pattern_telephone = /^\d{7,}$/;
                    if (!pattern_telephone.test(telephone)) {
                        alert("must be number and 7 digit");
                        return false;
                    }
                }
                if (mySelect.length == "") {
                    alert("Can not Select");
                    return false;
                } return true;
            });
        });
    </script>
</body>

</html>
