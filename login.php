<?php

include_once("connect.php");
$penjual = mysqli_query($mysqli, "SELECT * FROM penjual");

$pembeli = mysqli_query($mysqli, "SELECT * FROM pembeli");

if (isset($_POST['submit'])) {

  $user_name = $_POST['user_name'];

  if($user_name == '') {
    $user_kosong = true;
  }

  if (isset($_POST['tipe_user'])) {

    if ($_POST['tipe_user'] == 'pembeli') {

      while ($arr_pembeli = mysqli_fetch_array($pembeli)) {

        if ($user_name == $arr_pembeli['user_name']) {

          $det_pembeli = $arr_pembeli['id_pembeli'];

          header("location:katalog.php?id_pembeli=$det_pembeli");
          exit;
        } else {
          $user_name_salah = true;
        }
      }
    } elseif ($_POST['tipe_user'] == 'penjual') {

      while ($arr_penjual = mysqli_fetch_array($penjual)) {

        if ($user_name == $arr_penjual['user_name']) {

          $det_penjual = $arr_penjual['id_penjual'];

          header("location:katalog.php?id_penjual=$det_penjual");
          exit;
        } else {
          $user_name_salah = true;
        }
      }
    }
  } else {
    $empty_tipe_penjual = true;
  }
} 



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
  <style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
    }
    body{
        height: 100vh;
        background:url('bg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 300px;

        background-color: rgba(0,0,0,.7);
        box-shadow: 0 0 10px rgba(255,255,255,.3);
    }
    .container h1{
        text-align: left;
        color: #fafafa;
        margin-bottom: 30px;
        text-transform: uppercase;
        border-bottom: 4px solid #2979ff;
    }
    .container label{
        text-align: left;
        color: #90caf9;
    }
    .bold{
        font-weight: bold;
    }
    .username{
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #2979ff;
        color: #fff;
        font-size: 20px;
    }
    .container form button{
        width: 100%;
        padding: 5px 0;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #fafafa;
        margin-bottom: 5px;
    }
    .radio-item label{
        color: #90caf9;
    }
    p{
        text-align:center;
    }
  </style>

</head>
<body>
  <div class="container">
  <h1>Welcome</h1>
  <form action="" method="POST">

    <label class="bold">Masukkan username</label><br>
    <input type="text" class="username" name="user_name"><br>
    <label class="bold">Masuk sebagai</label><br>
    <div class="radio-item">
    <input type="radio" id="opsia" name="tipe_user" value="penjual">
    <label for="opsia">Penjual</label>
    </div>
    <div class="radio-item">
    <input type="radio" id="opsib" name="tipe_user" value="pembeli">
    <label for="opsib">Pembeli</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Login</button><br>
    <button type="" class="btn btn-primary" name="daftar_login" formaction="registrasi.php">Daftar</button>


    <?php

    if (isset($user_name_salah)) {
      echo "<p style='color:red'>username salah!</p>";
    } elseif (isset($user_kosong)) {
      echo "<p style='color:red'>username belum diisi!</p>";
    } elseif (isset($empty_tipe_penjual)) {
      echo "<p style='color:red'>tipe data belum diisi!</p>";
    } 

    ?>


  </form>
  </div>




</body>

</html>
