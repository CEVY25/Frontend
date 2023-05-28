<?php
  $conn = mysqli_connect("localhost","root","","db_kp");
  $query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
    $result = mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kerja Praktik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  </head>
  <nav>
    <nav class="navbar navbar-expand-lg" style="background-color: #006a4e">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/db_kp/img/navbrand.png" alt="" width="150" /></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
  </nav>
  <body>
    <div class="container-fluid">
      <div class="row border border-4">
        <div class="col-6 text-center" style="margin-top: 60px"><img src="/db_kp/img/UNPER.png" alt="" /></div>
        <div class="col-6 text-center">
          <div class="row" style="margin-top: 100px; padding-right:50px;" >
            <h1>KERJA PRAKTIK IF UNPER</h1>
            <form>
              <!-- <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" />
              </div> -->
              <div class="mb-3" > 
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" onkeypress="return checkNumber(event)" />
              </div>

              <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div> -->
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
          <div class="row" style="margin-top: 50px"></div>
        </div>
      </div>
    </div>
    <script>
      function checkNumber(event) {
        var aCode = event.which ? event.which : event.keyCode;

        if (aCode > 31 && (aCode < 48 || aCode > 57)) return false;

        return true;
      }
    </script>
    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbxt8IvW7s1rtlXoMMUSQYwy7k7UIvS8ibVNfeuJRM4Dnzybyf47qcZPBsMyPgrwxMhxaw/exec";
      const form = document.forms["PORTOFOLIO-Form"];
      const btnKirim = document.querySelector(".btn-kirim");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombpl loading, hilangkan tombol kirim
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombpl loading, hilangkan tombol kirim
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            // tampilkan alert
            myAlert.classList.toggle("d-none");
            // reset form
            form.reset();

            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
