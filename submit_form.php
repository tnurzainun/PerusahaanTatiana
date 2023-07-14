<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil nilai dari input form
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  // Lakukan pengolahan dan pengiriman pesan sesuai kebutuhan Anda

  // Contoh: Menampilkan pesan yang dikirim
  echo "<h3>Pesan Terkirim</h3>";
  echo "<p>Nama: $nama</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Pesan: $pesan</p>";
}
?>
