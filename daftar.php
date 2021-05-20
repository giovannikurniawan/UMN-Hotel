<?php
require_once "view/header.php";
if(isset($_POST['submit'])) {
$user = $_POST['user'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$pass = md5($_POST['pass']);

$sqlsimpan = $pdo->query("INSERT INTO tamu VALUES('', '$user', '$email', '$nama', '$alamat', '$telepon', '$pass', '')");

echo"<script>swal({
        type: 'success',
        title: 'Registrasi Sukses!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('login');
        } ,1500);</script>";
}
?>

<div>
  <img src="gambar/da5.png" width="100px" style="margin-left: -1110px; margin-top: -50px; margin-bottom: 20px;">
</div>

  <div id="daftar" style="margin-top: 60px;">
    <center>
      <h3>Isi Sesuai Kartu Identitas Anda (KTP/SIM/Passport)</h3>
      <hr>
      <form method="post" action="daftar" enctype="multipart/form-data">
        <input type="text" class="in" required="required" name="user" placeholder="Username">
        <input type="Email" class="in" required="required" name="email" placeholder="Email">
        <input type="text" class="in" required="required" name="nama" placeholder="Nama Lengkap">
        <input type="text" class="in" required="required" name="alamat" placeholder="Alamat">
        <input type="text" class="in" required="required" name="telepon" placeholder="Telepon">
        <input type="password" class="in" required="required" name="pass" placeholder="Password">
        <input type="submit" class="ins" name="submit" value="Daftar">
        <input type="reset" class="ins" name="" value="Reset">
      </form>
    </center>
  </div>

  <?php
    require_once "view/footer.php"
?>
