<?php
include('koneksi.php');

$user = $_POST['username'];
$pass = $_POST['pass'];

$q_cek = mysqli_query($koneksi, "SELECT COUNT(*) as jml FROM login WHERE username = '" . $user . "' AND password = '" . $pass . "';");
$cek = mysqli_fetch_array($q_cek);
if ($cek['jml'] > 0) {

    $q_data = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '" . $user . "' AND password = '" . $pass . "';");
    $data = mysqli_fetch_array($q_data);

    session_start();
    $_SESSION['user'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    header("Location:cetak.php");

    echo "Sini";

} else {
    ?>
<html>

<head></head>

<body>
    <a href="index.php">Login Gagal, Ulangi Login..!!</a>
</body>

</html>
<?php
}