<?php
session_start();
if ($_SESSION['user'] == null) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>UTAMA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body>

    <div class="container">

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Login as
                        <?php echo $_SESSION['user'] . " " . $_SESSION['nama']; ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="utama.php">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Log Out <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>

        <!-- Main component for a primary marketing message or call to action -->
        <form action="proses.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="height: 30px; background-color: black; color:white; padding:4px;">
                    Registrasi Peserta Didik
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tglmasuk" name="tglmasuk" placeholder="-">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NOMOR PESERTA UJIAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorpesertaujian" name="nomorpesertaujian"
                                placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PERNAH PAUD</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paud" value="Ya">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paud" value="tidak">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PERNAH TK</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tk" value="Ya">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tk" value="Tidak">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">HOBI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hobi" name="hobi" placeholder="HOBI">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">CITA CITA</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cita" name="cita" placeholder="CITA CITA">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="height: 30px; background-color: black; color:white; padding:4px;">
                    Data Pribadi
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jkel" value="Laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jkel" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tmptlahir" name="tmptlahir" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tgllahir" name="tgllahir" placeholder="-">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">AGAMA</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="agama" name="agama" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="khusus" name="khusus" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">ALAMAT JALAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamatjalan" name="alamatjalan" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="rt" name="rt" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">RW</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="rw" name="rw" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NAMA DUSUN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namadusun" name="namadusun" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NAMA KELURAHAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namalurah" name="namalurah" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">KECAMATAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namakec" name="namakec" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">KODE POS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kdpos" name="kdpos" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">TEMPAT TINGGAL</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tempattinggal" name="tempattinggal"
                                placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">MODA TRANSPORTASI</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="transport" name="transport" placeholder="-">
                        </div>


                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NOMOR HP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NOMOR TELEPON</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomortlp" name="nomortlp" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">EMAIL</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" placeholder="-">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">Penerima KPS</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="penerima_kps" value="Ya">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="penerima_kps" value="Tidak">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">KEWARGANEGARAAN</label>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kwn" value="Indonesia">
                                    <label class="form-check-label">Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kwn" value="Asing">
                                    <label class="form-check-label">Asing</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_negara" name="nama_negara"
                                placeholder="Nama Negara">
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12" style="height: 30px; background-color: black; color:white; padding:4px;">
                    DATA AYAH KANDUNG
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NAMA AYAH KANDUNG</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">TAHUN LAHIR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tahunlahirayah" name="tahunlahirayah"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PENDIDIKAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pendidikanayah" name="pendidikanayah"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PEKERJAAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PENGHASILAN BULANAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penghasilanayah" name="penghasilanayah"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kebutuhankhususayah" name="kebutuhankhususayah"
                                placeholder="-">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="height: 30px; background-color: black; color:white; padding:4px;">
                    DATA IBU KANDUNG
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">NAMA IBU KANDUNG</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">TAHUN LAHIR</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tahunlahiribu" name="tahunlahiribu"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PENDIDIKAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pendidikanibu" name="pendidikanibu"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PEKERJAAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">PENGHASILAN BULANAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penghasilanibu" name="penghasilanibu"
                                placeholder="-">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="margin-top : 5px;" class="col-sm-3 col-form-label">BERKEBUTUHAN KHUSUS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kebutuhankhususibu" name="kebutuhankhususibu"
                                placeholder="-">
                        </div>
                    </div>


                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-sm btn-block btn-primary">SIMPAN</button>
                </div>
            </div>
    </div>

    </div>

    </form>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>