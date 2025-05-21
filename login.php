<?php
// Örnek kullanıcı bilgileri
$dogru_email = "b1812100001@sakarya.edu.tr";
$dogru_sifre = "b1812100001";

$email = $_POST['email'];
$sifre = $_POST['sifre'];

if ($email == $dogru_email && $sifre == $dogru_sifre) {
  echo "<h1>Hoşgeldiniz $sifre</h1>";
} else {
  header("Location: login.html");
  exit();
}
?>
