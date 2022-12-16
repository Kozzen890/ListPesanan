<?php 
include_once('koneksi.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Dinus Resto | List Pesanan</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
        <svg viewBox="0 0 731.4285714285713 1024" class="home-icon ms-auto">
          <path
            d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
          ></path>
        </svg>
      </div>
    </nav>
    <section id="content">

    </section>
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <!-- <h6 class="text-primary">WHY CHOOSE US</h6> -->
          <img src="assets/img/resto.png" alt="" style="width: 200px ; height: 120px ;" class="mt-4">
          <h4 class="mt-3 mb-5">Daftar Pesanan</h4>
        </div>
        <div class="col-lg-12 bg-secondary bg-gradient p-5 w-75 align-items-center mx-auto">
          <div class="col-lg-12 bg-white align-center mx-auto w-80 p-2">
            <h4 class="mt-3 ms-2">001</h4>
            <table class="table table-bordered mt-2 mb-4 me-2 ms-auto me-auto" style="width: 80%;">
            <thead>
              <tr>
                <th scope="col" style="width:10%">NO</th>
                <th scope="col">Menu Pesanan</th>
                <th scope="col" style="width:10%">Qty</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nasi Goreng Special</td>
                <td>2</td>
                <td>Pedas</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ice Tea</td>
                <td>2</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="col-lg-12 bg-secondary bg-gradient p-5 mx-auto w-75">
          <div class="col-lg-12 bg-white align-center mx-auto w-80 p-2">
            <h4 class="mt-3 ms-2">002</h4>
            <table class="table table-bordered mt-2 mb-4 me-2 ms-auto me-auto" style="width: 80%;">
            <thead>
              <tr>
                <th scope="col" style="width:10%">NO</th>
                <th scope="col">Menu Pesanan</th>
                <th scope="col" style="width:10%">Qty</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nasi Goreng Special</td>
                <td>2</td>
                <td>Pedas</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ice Tea</td>
                <td>2</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="col-lg-12 bg-secondary bg-gradient mx-auto w-75 mb-3 p-5">
          <div class="col-lg-12 bg-white align-center mx-auto w-80 p-2">
            <h4 class="mt-3 ms-2">003</h4>
            <table class="table table-bordered mt-2 mb-4 me-2 ms-auto me-auto" style="width: 80%;">
            <thead>
              <tr>
                <th scope="col" style="width:10%">NO</th>
                <th scope="col">Menu Pesanan</th>
                <th scope="col" style="width:10%">Qty</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nasi Goreng Special</td>
                <td>2</td>
                <td>Pedas</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ice Tea</td>
                <td>2</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        
      </div>
    </div>
    <footer class="bg-secondary text-white text-center mt-5 pb-2 justify-content-center">
      <p class="pt-4">Copyright @ 2022 - Manajemen Proyek A11.4503</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>