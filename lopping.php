<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Menggunakan for</h4>
    <?php
    for ($i = 1; $i <= 5; $i++) {
       for ($j = 1; $j <= $i; $j++) {
          echo $i;
     }
       echo "<br>";
  }
?>
  <h4> Menggunakan loop while</h4>
  <?php
$i = 1;
   while ($i <= 5) {
      $j = 1;
      while ($j <= $i) {
         echo $i;
           $j++;
     }
     echo "<br>";
      $i++;
   }
?>
<?php
 
function faktorialFor($n) {
    if ($n < 0) return "Input tidak valid. Angka harus positif.";
    $faktorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $faktorial *= $i;
    }
    return $faktorial;
}
?>
 
<?php
 
function faktorialWhile($n) {
    if ($n < 0) return "Input tidak valid. Angka harus positif.";
    $faktorial = 1;
    $i = 1;
    while ($i <= $n) {
        $faktorial *= $i;
        $i++;
    }
    return $faktorial;
}
?>
<?php
 
 
function faktorialDoWhile($n) {
    if ($n < 0) return "Input tidak valid. Angka harus positif.";
    $faktorial = 1;
    $i = 1;
    do {
        $faktorial *= $i;
        $i++;
    } while ($i <= $n);
    return $faktorial;
}
 
// Contoh penggunaan
$nilai = 8;
echo "<h4>Looping for</h4>";
echo "Faktorial dari $nilai menggunakan for loop: " . faktorialFor($nilai) . "<br>";
echo "<h4>Looping while</h4>";
echo "Faktorial dari $nilai menggunakan while loop: " . faktorialWhile($nilai) . "<br>";
echo "<h4>Looping do-while </h4>";
echo "Faktorial dari $nilai menggunakan do-while : " . faktorialDoWhile($nilai) . "<br>";
?>
</body>
</html>