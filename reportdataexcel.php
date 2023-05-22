<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'id');
$sheet->setCellValue('B1', 'TANGGAL');
$sheet->setCellValue('C1', 'JENIS DAFTAR');
$sheet->setCellValue('D1', 'TANGGAL SEKOLAH');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'NOMOR PESERTA');
$sheet->setCellValue('G1', 'PAUD');
$sheet->setCellValue('H1', 'TK');
$sheet->setCellValue('I1', 'HOBI');
$sheet->setCellValue('J1', 'CITA CITA');
$sheet->setCellValue('K1', 'NAMA');
$sheet->setCellValue('L1', 'JENIS KELAMIN');
$sheet->setCellValue('M1', 'NISN');
$sheet->setCellValue('N1', 'NIK');
$sheet->setCellValue('O1', 'TEMPAT LAHIR');
$sheet->setCellValue('P1', 'TANGGAL LAHIR');
$sheet->setCellValue('Q1', 'AGAMA');
$sheet->setCellValue('R1', 'KHUSUS');
$sheet->setCellValue('S1', 'ALAMAT JALAN');
$sheet->setCellValue('T1', 'RT');
$sheet->setCellValue('U1', 'RW');
$sheet->setCellValue('V1', 'LURAH');
$sheet->setCellValue('W1', 'DUSUN');
$sheet->setCellValue('X1', 'KECAMATAN');
$sheet->setCellValue('Y1', 'KODE POS');
$sheet->setCellValue('Z1', 'TEMPAT TINGGAL');
$sheet->setCellValue('AA1', 'TRANSPORTASI');
$sheet->setCellValue('AB1', 'HP');
$sheet->setCellValue('AC1', 'TELEPON');
$sheet->setCellValue('AD1', 'EMAIL');
$sheet->setCellValue('AE1', 'KPS');
$sheet->setCellValue('AF1', 'KWN');
$sheet->setCellValue('AG1', 'NAMA NEGARA');
$sheet->setCellValue('AH1', 'NAMA AYAH');
$sheet->setCellValue('AI1', 'TAHUN LAHIR AYAH');
$sheet->setCellValue('AJ1', 'PENDIDIKAN AYAH');
$sheet->setCellValue('AK1', 'PEKERJAAN AYAH');
$sheet->setCellValue('AL1', 'PENGHASILAN AYAH');
$sheet->setCellValue('AM1', 'BERKEBUTUHAN KHUSUS AYAH');
$sheet->setCellValue('AN1', 'NAMA IBU');
$sheet->setCellValue('AO1', 'TAHUN LAHIR IBU');
$sheet->setCellValue('AP1', 'PENDIDIKAN IBU');
$sheet->setCellValue('AQ1', 'PEKERJAAN IBU');
$sheet->setCellValue('AR1', 'PENGHASILAN IBU');
$sheet->setCellValue('AS1', 'BERKEBUTUHAN KHUSUS IBU');

$query = mysqli_query($koneksi, "select * from data");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    // $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('A' . $i, $row['id']);
    $sheet->setCellValue('B' . $i, $row['tgl']);
    $sheet->setCellValue('C' . $i, $row['jenis_daftar']);
    $sheet->setCellValue('D' . $i, $row['tgl_sekolah']);
    $sheet->setCellValue('E' . $i, $row['nis']);
    $sheet->setCellValue('F' . $i, $row['no_peserta']);
    $sheet->setCellValue('G' . $i, $row['paud']);
    $sheet->setCellValue('H' . $i, $row['tk']);
    $sheet->setCellValue('I' . $i, $row['hobi']);
    $sheet->setCellValue('J' . $i, $row['cita']);
    $sheet->setCellValue('K' . $i, $row['nama']);
    $sheet->setCellValue('L' . $i, $row['jkel']);
    $sheet->setCellValue('M' . $i, $row['nisn']);
    $sheet->setCellValue('N' . $i, $row['nik']);
    $sheet->setCellValue('O' . $i, $row['tmplahir']);
    $sheet->setCellValue('P' . $i, $row['tgllahir']);
    $sheet->setCellValue('Q' . $i, $row['agama']);
    $sheet->setCellValue('R' . $i, $row['khusus']);
    $sheet->setCellValue('S' . $i, $row['alamat_jalan']);
    $sheet->setCellValue('T' . $i, $row['rt']);
    $sheet->setCellValue('U' . $i, $row['rw']);
    $sheet->setCellValue('V' . $i, $row['lurah']);
    $sheet->setCellValue('W' . $i, $row['dusun']);
    $sheet->setCellValue('X' . $i, $row['kec']);
    $sheet->setCellValue('Y' . $i, $row['kdpos']);
    $sheet->setCellValue('Z' . $i, $row['tmp_tinggal']);
    $sheet->setCellValue('AA' . $i, $row['trans']);
    $sheet->setCellValue('AB' . $i, $row['hp']);
    $sheet->setCellValue('AC' . $i, $row['tlp']);
    $sheet->setCellValue('AD' . $i, $row['email']);
    $sheet->setCellValue('AE' . $i, $row['kps']);
    $sheet->setCellValue('AF' . $i, $row['kwn']);
    $sheet->setCellValue('AG' . $i, $row['nm_negara']);
    $sheet->setCellValue('AH' . $i, $row['Nama_Ayah']);
    $sheet->setCellValue('AI' . $i, $row['Tahun_Lahir_Ayah']);
    $sheet->setCellValue('AJ' . $i, $row['Pendidikan_Ayah']);
    $sheet->setCellValue('AK' . $i, $row['Pekerjaan_Ayah']);
    $sheet->setCellValue('AL' . $i, $row['Penghasilan_Bulanan_Ayah']);
    $sheet->setCellValue('AM' . $i, $row['Berkebutuhan_khusus_Ayah']);
    $sheet->setCellValue('AN' . $i, $row['Nama_Ibu']);
    $sheet->setCellValue('AO' . $i, $row['Tahun_Lahir_Ibu']);
    $sheet->setCellValue('AP' . $i, $row['Pendidikan_Ibu']);
    $sheet->setCellValue('AQ' . $i, $row['Pekerjaan_Ibu']);
    $sheet->setCellValue('AR' . $i, $row['Penghasilan_Bulanan_Ibu']);
    $sheet->setCellValue('AS' . $i, $row['Berkebutuhan_khusus_Ibu']);


    $i++;
}


$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \phpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:AS' . $i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Penerimaan Siswa Baru.xlsx');