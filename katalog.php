<?php

  include_once('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>


</head>


<body>

  <?php  

    $barang = mysqli_query($mysqli, "SELECT barang.*, user.nama_user
    FROM barang
    JOIN user 
    ON barang.id_user = user.id_user; ");  

    

  ?>

  <a href="user.php?id_user=<?=$arr_barang['id_barang']; ?>" class="btn btn-primary">Akun</a>

  <?php

    while($arr_barang = mysqli_fetch_array($barang)):

  ?>

  <br><br>

  <img src="img/<?=  $arr_barang['gambar_barang']; ?>" width="200px" alt="">
  <p><?= $arr_barang['nama_barang']; ?></p>
  <p><?= $arr_barang['harga_barang']; ?></p>
  <p><?= $arr_barang['stok_barang']; ?></p>
  <p><?= $arr_barang['nama_user']; ?></p>
  <a href="detail.php?id_barang=<?=$arr_barang['id_barang']; ?>" class="btn btn-primary">detail</a>
  <a href="pembelian.php?id_barang=<?=$arr_barang['id_barang']; ?>" class="btn btn-primary">beli</a>
  <br><br>
      
  <?php endwhile?>
  
</body>
</html>
