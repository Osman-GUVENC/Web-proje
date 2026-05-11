<?php
// Tanımlı kullanıcı bilgileri (proje şartlarına göre)
$gecerliEmail = "b2412100001@sakarya.edu.tr";
$gecerliSifre = "b2412100001";
$ogrenciNo    = "b2412100001";

// POST ile gelen veriler
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['sifre']) ? trim($_POST['sifre']) : '';

// Boş alan kontrolü
if (empty($email) || empty($sifre)) {
    header("Location: login.html?hata=bos");
    exit;
}

// Kimlik doğrulama
if ($email === $gecerliEmail && $sifre === $gecerliSifre) {
    // BAŞARILI GİRİŞ
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hoşgeldiniz | Osman Güvenç</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .success-page {
      min-height: 100vh;
      background: linear-gradient(135deg, #96281b 0%, #c0392b 50%, #e74c3c 100%);
      display: flex; align-items: center; justify-content: center; padding: 24px;
    }
    .success-card {
      background: white; border-radius: 18px; padding: 56px 48px;
      text-align: center; max-width: 480px; width: 100%;
      box-shadow: 0 20px 60px rgba(0,0,0,.3);
    }
    .success-icon { font-size: 4rem; margin-bottom: 20px; }
    .success-title { font-size: 1.8rem; font-weight: 800; color: #27ae60; margin-bottom: 8px; }
    .ogrenci-no {
      display: inline-block; background: #eafaf1; color: #27ae60;
      border-radius: 8px; padding: 10px 24px;
      font-size: 1.1rem; font-weight: 700; margin: 16px 0 28px;
      border: 2px solid #a9dfbf;
    }
  </style>
</head>
<body>
  <div class="success-page">
    <div class="success-card">
      <div class="success-icon">✅</div>
      <h1 class="success-title">Giriş Başarılı!</h1>
      <p style="color:#555; margin-bottom:8px;">Hoşgeldiniz</p>
      <div class="ogrenci-no"><?php echo htmlspecialchars($ogrenciNo); ?></div>
      <p style="color:#888; font-size:.9rem; margin-bottom:32px;">Sisteme başarıyla giriş yaptınız.</p>
      <a href="index.html" class="btn btn-primary" style="display:inline-flex; justify-content:center;">🏠 Ana Sayfaya Git</a>
    </div>
  </div>
</body>
</html>
<?php
} else {
    // HATALI GİRİŞ – geri yönlendir
    header("Location: login.html?hata=hatali");
    exit;
}
?>
