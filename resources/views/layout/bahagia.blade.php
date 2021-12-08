<!-- <!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>
<body>
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    @yield('judulhalaman')<br>
    @section('konten')
    @show
<footer>Hak Cipta Faizal Johan
</footer>
</body>
</html> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <link
        href="/css/style.css"
        rel="stylesheet">
        <link href="/css/tambahan.css"
        rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <title> @yield('title')</title>
  </head>

  <body id="page-top">


<!-- ======= Header ======= -->
<!-- <header id="header" class="header fixed-top d-flex align-items-center">
<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Hardhika Propitadewa 5026201015</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div> -->
<!-- End Logo -->



<!-- End Icons Navigation -->

<!-- </header> -->
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
<div style="color: #119f66; font-size: 15px;" class="text-center mb-5">
    <h3 style="font-weight: 600;">Rahma Fauzia</h3>
    <h3 style="font-weight: 600;">5026201027</h3>
    <img style="height: 150px; width: 150px" class="rounded-circle" src="/images/saya.jpg" alt="">
</div>

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/pegawai">
      <i class="bi bi-grid"></i>
      <span>Pegawai</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="/absen">
      <i class="bi bi-grid"></i>
      <span>Absen</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="">
      <i class="bi bi-grid"></i>
      <span>Tugas Minggu Depan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="">
      <i class="bi bi-grid"></i>
      <span>Praktikum</span>
    </a>
  </li><!-- End Dashboard Nav -->


    </ul>
  </li><!-- End Components Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

@yield('Konten')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
<div class="copyright">
  &copy; Copyright by <br>
  <span>Rahma Fauzia 5026201027</span>
</div>

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




@yield('judulhalaman')<br>
<nav>
    <ul></ul>
</nav>
@section('konten')
@show


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  </body>
</html>

