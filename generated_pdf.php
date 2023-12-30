<?php
require('fpdf186/fpdf.php');

// Create a PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', 'B', 16);

// Add title
$pdf->Cell(40, 10, 'Formulir Data Siswa');

// Add data from the form (replace these with your actual form data)
$pdf->Ln(); // Move to the next line
$pdf->Cell(40, 10, 'Nama: ' . $_POST['nama']);
$pdf->Cell(40, 10, 'Tempat Lahir: ' . $_POST['tempat_lahir']);
$pdf->Cell(40, 10, 'Tanggal Lahir: ' . $_POST['tanggal_lahir']);
$pdf->Cell(40, 10, 'Alamat: ' . $_POST['alamat']);
$pdf->Cell(40, 10, 'NISN: ' . $_POST['nisn']);
$pdf->Cell(40, 10, 'NIK: ' . $_POST['nik']);
$pdf->Cell(40, 10, 'Jenis Kelamin: ' . $_POST['kelamin']);
$pdf->Cell(40, 10, 'Status dalam Keluarga: ' . $_POST['statusKeluarga']);
$pdf->Cell(40, 10, 'Anak ke Berapa: ' . $_POST['anakBrp']);
$pdf->Cell(40, 10, 'Jumlah Saudara: ' . $_POST['jmlhSdr']);
$pdf->Cell(40, 10, 'Nama Sekolah Asal: ' . $_POST['sekolahAsal']);
$pdf->Cell(40, 10, 'NPSN Sekolah: ' . $_POST['npsnSekolah']);
$pdf->Cell(40, 10, 'Alamat Sekolah Asal: ' . $_POST['almtSekolahAsal']);
$pdf->Cell(40, 10, 'Nomor KK: ' . $_POST['nmrKK']);
$pdf->Cell(40, 10, 'Nama Ayah: ' . $_POST['namaAyah']);
$pdf->Cell(40, 10, 'NIK Ayah: ' . $_POST['nikAyah']);
$pdf->Cell(40, 10, 'Tahun Lahir Ayah: ' . $_POST['thnAyah']);
$pdf->Cell(40, 10, 'Pendidikan terakhir Ayah: ' . $_POST['pnddknAyah']);
$pdf->Cell(40, 10, 'Pekerjaan Ayah: ' . $_POST['pkrjnAyah']);
$pdf->Cell(40, 10, 'Nama Ibu: ' . $_POST['namaIbu']);
$pdf->Cell(40, 10, 'NIK Ibu: ' . $_POST['nikIbu']);
$pdf->Cell(40, 10, 'Tahun Lahir Ibu: ' . $_POST['thnIbu']);
$pdf->Cell(40, 10, 'Pendidikan Terakhir Ibu: ' . $_POST['pnddknIbu']);
$pdf->Cell(40, 10, 'Pekerjaan Ibu: ' . $_POST['pkrjnIbu']);
$pdf->Cell(40, 10, 'Penghasilan Orang Tua: ' . $_POST['penghasilan']);
$pdf->Cell(40, 10, 'Nama Wali: ' . $_POST['namaWali']);
$pdf->Cell(40, 10, 'NIK Wali: ' . $_POST['nikWali']);
$pdf->Cell(40, 10, 'Tahun Lahir Wali: ' . $_POST['thnLahirWali']);
$pdf->Cell(40, 10, 'Pekerjaan Wali: ' . $_POST['pkrjnWali']);
$pdf->Cell(40, 10, 'Alamat Wali: ' . $_POST['almtWali']);
$pdf->Cell(40, 10, 'Desa/Kelurahan: ' . $_POST['desa']);
$pdf->Cell(40, 10, 'Kecamatan: ' . $_POST['kecamatan']);
$pdf->Cell(40, 10, 'Kabupaten: ' . $_POST['kabupaten']);
$pdf->Cell(40, 10, 'Kode POS: ' . $_POST['kodepos']);
$pdf->Cell(40, 10, 'Provinsi: ' . $_POST['provinsi']);
$pdf->Cell(40, 10, 'Nomor yang dapat dihubungi: ' . $_POST['nmrkonfirmasi']);
$pdf->Cell(40, 10, 'E-Mail aktif: ' . $_POST['email']);
// Add more cells for other form fields

// Output the PDF to the browser or save it to a file
$pdf->Output('formulir.pdf', 'D');
?>
