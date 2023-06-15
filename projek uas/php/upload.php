<?php
error_reporting();
include 'koneksi.php';
session_start(); // Memulai sesi

if (isset($_POST['upload'])) {
    // Ambil nilai-nilai dari formulir HTML
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tingkat_kemampuan = isset($_POST['tingkat_kemampuan']) ? implode(",", $_POST['tingkat_kemampuan']) : '';
    $ukuran = $_POST['ukuran'];
    $jenis_pakaian = $_POST['pakaian'];
    $jenis_acara = isset($_POST['jenis_acara']) ? implode(",", $_POST['jenis_acara']) : '';

    // Proses upload gambar    
    $gambar_nama = $_FILES['file-ip-1']['name'];
    $gambar_tmp = $_FILES['file-ip-1']['tmp_name'];
    $gambar_dest = 'path_gambar/' . $gambar_nama;


    // Proses upload file pola
    $file_pola_nama = $_FILES['myFile']['name'];
    $file_pola_tmp = $_FILES['myFile']['tmp_name'];
    $file_pola_dest = 'path_file/' . $file_pola_nama;

    // Mendapatkan ID pengguna dari sesi
    $id_user = $_SESSION['user_id'];

    // Mendapatkan tanggal upload
    $tgl_upload = date('Y-m-d H:i:s');

    // Simpan data ke database
    $query = "INSERT INTO konten (id_konten, id_user, judul_konten, nama_gambar, deskripsi, nama_file, tgl_upload, tingkat_kemampuan, jenis_acara, ukuran, jenis_pakaian)
            VALUES (NULL, '$id_user', '$judul', '$gambar_dest', '$deskripsi', '$file_pola_dest', '$tgl_upload', '$tingkat_kemampuan', '$jenis_acara', '$ukuran', '$jenis_pakaian')";

    if (mysqli_query($koneksi, $query)) {
        // Pindahkan gambar ke direktori tujuan
        if (move_uploaded_file($gambar_tmp, $gambar_dest)) {
            echo "File gambar berhasil diunggah dan dipindahkan.";
        } else {
            echo "Gagal memindahkan file gambar.";
        }

        // Pindahkan file pola ke direktori tujuan (jika ada)
        if (move_uploaded_file($file_pola_tmp, $file_pola_dest)) {
            echo "File PDF berhasil diunggah dan dipindahkan.";
        } else {
            echo "Gagal memindahkan file PDF.";
        }

        // header("Location: halaman_sukses.php"); // Redirect ke halaman sukses jika diperlukan
        header('Location: ../beranda.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}
?>
