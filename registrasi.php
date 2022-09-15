<?php

include_once('connect.php');

if (isset($_POST['daftar_registrasi'])) {

  if (isset($_POST['tipe_user'])) {

    $nama = $_POST['nama'];
    $user_name = $_POST['user_name'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];

    if ($nama == '' || $user_name == '' || $email == '' || $email == '') {
      $field_kosong = true;
    } else {
      if ($_POST['tipe_user'] == 'pembeli') {

        $insert = mysqli_query($mysqli, " INSERT INTO `pembeli`(`nama_pembeli`, `email`, `no_telp`, `user_name`) VALUES('$nama', '$email', '$no_telp', '$user_name')  ");

        header("location:login.php");
      } elseif ($_POST['tipe_user'] == 'penjual') {

        $insert = mysqli_query($mysqli, " INSERT INTO `penjual`(`nama_penjual`, `email`, `no_telp`, `user_name`) VALUES('$nama', '$email', '$no_telp', '$user_name')  ");

        header("location:login.php");
      } 
    }
  }
  else {
    $field_kosong = true;
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
    }
    .radio-item label{
        color: #90caf9;
    }
  </style>

</head>


<body>
  <div class="container">  
  <h1>Daftar</h1>
  <form action="" method="POST">
    <label>Masukkan nama</label>
    <input type="text" class="username" name="nama">

    <label>Masukkan username</label>
    <input type="text" class="username" name="user_name">

    <label>Masukkan email</label>
    <input type="email" class="username" name="email" id="">

    <label>Masukkan no telpon</label>
    <input type="text" class="username" name="no_telp">

    <label>registrasi sebagai</label>
    <div class="radio-item">
    <input type="radio" id="opsia" name="tipe_user" value="penjual">
    <label for="opsia">Penjual</label>
    </div>
    <div class="radio-item">
    <input type="radio" id="opsib" name="tipe_user" value="pembeli">
    <label for="opsib">Pembeli</label>
    </div>

    <!-- <p>Masukkan password</p>
    <input type="text" name="password"> -->

    <br>
    <button type="submit" name="daftar_registrasi" class="btn btn-primary">Daftar</button>
    <button typr="" formaction="login.php">Back</button>
    <!-- <a href="login.php" class="btn btn-primary">back</a> -->
    <?php

    if (isset($field_kosong)) {
      echo "<p style='color:blue'>ada field yang belum diisi!</p>";
    }


    ?>

  </form>
  </div>



  <?php

  // if (isset($_POST['daftar'])) {
  //   if (isset($_POST['tipe_user'])) {

  //     if (isset($_POST['nama'])) {
  //       $nama = $_POST['nama'];
  //     } else {
  //       $empty_nama = true;
  //     }

  //     if (isset($_POST['user_name'])) {
  //       $user_name = $_POST['user_name'];
  //     } else {
  //       $empty_user_name = true;
  //     }

  //     if (isset($_POST['email'])) {
  //       $email = $_POST['email'];
  //     } else {
  //       $empty_email = true;
  //     }

  //     if (isset($_POST['no_telp'])) {
  //       $no_telp = $_POST['no_telp'];
  //       // $password = $_POST['password'];
  //     } else {
  //       $empty_no_telp = true;
  //     }

  //     if (!isset($field_kosong)) {
  //       $tipe_user = $_POST['tipe_user'];
  //       if ($tipe_user == 'penjual') {

  //         $insert = mysqli_query($mysqli, " INSERT INTO `penjual`(`nama_penjual`, `email`, `no_telp`, `user_name`) VALUES('$nama', '$email', '$no_telp', '$user_name')  ");

  //         header("location:login.php");
  //       } elseif ($tipe_user == 'pembeli') {

  //         $insert = mysqli_query($mysqli, " INSERT INTO `pembeli`(`nama_pembeli`, `email`, `no_telp`, `user_name`) VALUES('$nama', '$email', '$no_telp', '$user_name')  ");

  //         header("location:login.php");
  //       } else {
  //         $field_kosong = true;
  //       }
  //     } 
  //   } else {
  //     $empty_tipe_user = true;
  //   }
  // }


  ?>

</body>

</html>
