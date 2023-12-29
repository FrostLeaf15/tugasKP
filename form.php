<?php

// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulirsekolah";

// Buat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//periksa koneksi
if ($conn -> connect_error) {
    die("Koneksi Gagal : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // tangkap data dari
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $kelamin = isset($_POST["kelamin"]) ? $_POST["kelamin"] : "";
    //$kelamin = isset($_POST['kelamin_cowo']) ? 'Laki-Laki' : 'Perempuan';
    $keluarga = isset($_POST["statusKeluarga"]) ? $_POST["statusKeluarga"] : "";
    //$keluarga = isset($_POST['keluarga_sulung']) ? 'Sulung' : (isset($_POST['keluarga_tengah']) ? 'Tengah' : 'Bungsu');
    $anak_ke = $_POST['anakBrp'];
    $jml_saudara = $_POST['jmlhSdr'];
    $sekolah_asal = $_POST['sekolahAsal'];
    $nisn_sekolah_asal = $_POST['nisnSekolah'];
    $alamat_sekolah_asal = $_POST['SekolahAsal'];
    $nomor_kk = $_POST['nmrKK'];
    $nama_ayah = $_POST['namaAyah'];
    $nik_ayah = $_POST['nikAyah'];
    $tahun_lahir_ayah = $_POST['thnAyah'];
    $pendidikan_ayah = isset($_POST["pnddknAyah"]) ? $_POST["pnddknAyah"] : "";
    //$pendidikan_ayah = $_POST['pnddknAyah'];
    $pekerjaan_ayah = $_POST['pkrjnAyah'];
    $nama_ibu = $_POST['namaIbu'];
    $nik_ibu = $_POST['nikIbu'];
    $tahun_lahir_ibu = $_POST['thnIbu'];
    $pendidikan_ibu = isset($_POST["pnddknIbu"]) ? $_POST["pnddknIbu"] : "";
    //$pendidikan_ibu = $_POST['pnddknIbu'];
    $pekerjaan_ibu = $_POST['pkrjnIbu'];
    $penghasilan_orang_tua = isset($_POST["penghasilan"]) ? $_POST["penghasilan"] : "";
    //$penghasilan_orang_tua = $_POST['penghasilan_orang_tua'];
    $nama_wali = $_POST['namaWali'];
    $nik_wali = $_POST['nikWali'];
    $tahun_lahir_wali = $_POST['thnLahirWali'];
    $pekerjaan_wali = $_POST['pkrjnWali'];
    $alamat_wali = $_POST['almtWali'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $kode_pos = $_POST['kodepos'];
    $provinsi = $_POST['provinsi'];
    $nomor_kontak = $_POST['nmrkonfirmasi'];
    $email = $_POST['email'];
    $submit = $_POST['submit'];

}

//buat kueri untuk menyimpan data
$sql = "INSERT INTO db_form (nama, tempat_lahir, tanggal_lahir, alamat, nisn, nik, 
        kelamin, keluarga, anak_ke, jml_saudara, sekolah_asal, nisn_sekolah_asal, 
        alamat_sekolah_asal, nomor_kk, nama_ayah, nik_ayah, tahun_lahir_ayah,  
        pendidikan_ayah, pekerjaan_ayah, nama_ibu, nik_ibu, tahun_lahir_ibu, 
        pendidikan_ibu, pekerjaan_ibu, penghasilan_orang_tua, nama_wali, nik_wali, 
        tahun_lahir_wali, pekerjaan_wali, alamat_wali, desa, kecamatan, kabupaten, 
        kode_pos, provinsi, nomor_kontak, email)
        VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$nisn', 
        '$nik', '$kelamin', '$keluarga', '$anak_ke', '$jml_saudara', '$sekolah_asal', 
        '$nisn_sekolah_asal', '$alamat_sekolah_asal', '$nomor_kk', '$nama_ayah', 
        '$nik_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', 
        '$nama_ibu', '$nik_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', 
        '$pekerjaan_ibu', '$penghasilan_orang_tua', '$nama_wali', '$nik_wali', 
        '$tahun_lahir_wali', '$pekerjaan_wali', '$alamat_wali', '$desa', '$kecamatan', 
        '$kabupaten', '$kode_pos', '$provinsi', '$nomor_kontak', '$email')";

//eksekusi kueri
if ($conn->query($sql) === TRUE) {
    echo "Data Berhasil disimpan ke DataBase.";
} else {
    echo "Error : " . $sql . "<br>" . $conn->error;
}

//tutup koneksi
$conn->close();

?>
