<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  
  <?php
    $kumpulanSoal = array(
      array("Kode"=>"1",
            "Soal"=>"ini adalah soal 1",
            "Gambar"=> "ini adlah link gambar",
            "Jawaban" => "Ini adalah jawaban"),
      array("Kode"=>"2",
            "Soal"=>"ini adalah soal 1",
            "Gambar"=> "ini adlah link gambar",
            "Jawaban" => "Ini adalah jawaban"),
    );



    for($i = 0; $i <= count($kumpulanSoal) - 1; $i++){
      $j = 1;

      if( $j == $i){
        echo "kode Soal " . $i + 1 .  " = ". $kumpulanSoal[$i]['Kode'] . "<br/>" . "Soal = ". $kumpulanSoal[$i]['Soal'] . "<br/>". "Gambar = ". $kumpulanSoal[$i]['Gambar'] . "<br/>". "Jawaban = ". $kumpulanSoal[$i]['Jawaban'] . "<br/><br/>";
      }
    }
  ?>

</body>
</html>